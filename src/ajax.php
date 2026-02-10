<?php
include_once "../conexion.php";
session_start();

if (isset($_POST['action'])) {
    if ($_POST['action'] == 'buscarCliente') {
        $dni = $_POST['dni'];
        $stmt = mysqli_prepare($conexion, "SELECT * FROM clientes WHERE dni = ?");
        mysqli_stmt_bind_param($stmt, "s", $dni);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $data = mysqli_fetch_assoc($result) ?: 0;
        echo json_encode($data);
        exit;
    }

    if ($_POST['action'] == 'buscarProducto') {
        $codigo = $_POST['codigo'];
        $stmt = mysqli_prepare($conexion, "SELECT * FROM productos WHERE codigo = ? OR nombre LIKE ?");
        $term = "%$codigo%";
        mysqli_stmt_bind_param($stmt, "ss", $codigo, $term);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $data = [];
        if ($_POST['autocomplete'] == 'true') {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = [
                    'id' => $row['id'],
                    'label' => $row['nombre'],
                    'value' => $row['nombre'],
                    'codigo' => $row['codigo'],
                    'precio' => $row['precio_venta'],
                    'stock' => $row['cantidad']
                ];
            }
        } else {
            $data = mysqli_fetch_assoc($result) ?: 0;
        }
        echo json_encode($data);
        exit;
    }

    if ($_POST['action'] == 'agregarProducto') {
        $id = (int)$_POST['id'];
        $cantidad = (int)$_POST['cantidad'];

        $stmt = mysqli_prepare($conexion, "SELECT * FROM productos WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

        if ($result) {
            if (!isset($_SESSION['detalle'])) {
                $_SESSION['detalle'] = [];
            }

            $id_existente = -1;
            foreach ($_SESSION['detalle'] as $key => $item) {
                if ($item['id'] == $id) {
                    $id_existente = $key;
                    break;
                }
            }

            if ($id_existente != -1) {
                $_SESSION['detalle'][$id_existente]['cantidad'] += $cantidad;
                $_SESSION['detalle'][$id_existente]['subtotal'] = $_SESSION['detalle'][$id_existente]['cantidad'] * $_SESSION['detalle'][$id_existente]['precio'];
            } else {
                $detalle = [
                    'id' => $id,
                    'codigo' => $result['codigo'],
                    'nombre' => $result['nombre'],
                    'cantidad' => $cantidad,
                    'precio' => $result['precio_venta'],
                    'subtotal' => $cantidad * $result['precio_venta']
                ];
                $_SESSION['detalle'][] = $detalle;
            }
            echo "ok";
        } else {
            echo "error";
        }
        exit;
    }

    if ($_POST['action'] == 'listarDetalle') {
        $html = '';
        $total = 0;
        if (isset($_SESSION['detalle'])) {
            foreach ($_SESSION['detalle'] as $key => $item) {
                $html .= "<tr>
                    <td>{$item['codigo']}</td>
                    <td>{$item['nombre']}</td>
                    <td>{$item['cantidad']}</td>
                    <td>" . number_format($item['precio'], 2) . "</td>
                    <td>" . number_format($item['subtotal'], 2) . "</td>
                    <td><button type='button' class='btn btn-danger btn-sm' onclick='eliminarDetalle($key)'><i class='fas fa-trash-alt'></i></button></td>
                </tr>";
                $total += $item['subtotal'];
            }
        }
        $footer = "<tr>
            <td colspan='4' class='text-end'><strong>TOTAL</strong></td>
            <td><strong>" . number_format($total, 2) . "</strong></td>
            <td></td>
        </tr>";
        echo json_encode(['html' => $html, 'footer' => $footer, 'total' => $total]);
        exit;
    }

    if ($_POST['action'] == 'eliminarDetalle') {
        $key = (int)$_POST['key'];
        if (isset($_SESSION['detalle'][$key])) {
            unset($_SESSION['detalle'][$key]);
            $_SESSION['detalle'] = array_values($_SESSION['detalle']);
        }
        echo "ok";
        exit;
    }

    if ($_POST['action'] == 'procesarVenta') {
        $id_cliente = (int)$_POST['id_cliente'];
        $id_usuario = $_SESSION['idUser'];
        $tipo = $_POST['tipo'];
        $total = 0;

        if (empty($_SESSION['detalle'])) {
            echo "vacio";
            exit;
        }

        foreach ($_SESSION['detalle'] as $item) {
            $total += $item['subtotal'];

            // Server-side stock validation
            $stmt_stock = mysqli_prepare($conexion, "SELECT cantidad FROM productos WHERE id = ?");
            mysqli_stmt_bind_param($stmt_stock, "i", $item['id']);
            mysqli_stmt_execute($stmt_stock);
            $res_stock = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt_stock));
            if ($res_stock['cantidad'] < $item['cantidad']) {
                echo "insuficiente_" . $item['nombre'];
                exit;
            }
        }

        mysqli_begin_transaction($conexion);
        try {
            $stmt_venta = mysqli_prepare($conexion, "INSERT INTO ventas(cliente_id, usuario_id, total, tipo) VALUES (?, ?, ?, ?)");
            mysqli_stmt_bind_param($stmt_venta, "iids", $id_cliente, $id_usuario, $total, $tipo);
            mysqli_stmt_execute($stmt_venta);
            $id_venta = mysqli_insert_id($conexion);

            $stmt_det = mysqli_prepare($conexion, "INSERT INTO detalle_ventas(venta_id, producto_id, cantidad, precio, subtotal) VALUES (?, ?, ?, ?, ?)");
            $stmt_upd = mysqli_prepare($conexion, "UPDATE productos SET cantidad = cantidad - ? WHERE id = ?");

            foreach ($_SESSION['detalle'] as $item) {
                mysqli_stmt_bind_param($stmt_det, "iiidd", $id_venta, $item['id'], $item['cantidad'], $item['precio'], $item['subtotal']);
                mysqli_stmt_execute($stmt_det);

                mysqli_stmt_bind_param($stmt_upd, "ii", $item['cantidad'], $item['id']);
                mysqli_stmt_execute($stmt_upd);
            }

            mysqli_commit($conexion);
            unset($_SESSION['detalle']);
            echo $id_venta;
        } catch (Exception $e) {
            mysqli_rollback($conexion);
            echo "error";
        }
        exit;
    }
}
?>
