<?php
/**
 * Test Suite Automatizado para SIS CandeWeb Ventas
 */

require_once __DIR__ . '/sis-candeweb/includes/functions.php';

echo "=== INICIANDO PRUEBAS AUTOMATIZADAS SIS CANDEWEB VENTAS ===\n\n";

$testsPassed = 0;
$testsFailed = 0;

function assertTest($name, $condition) {
    global $testsPassed, $testsFailed;
    if ($condition) {
        echo " [PASS] $name\n";
        $testsPassed++;
    } else {
        echo " [FAIL] $name\n";
        $testsFailed++;
    }
}

// Test 1: Conexión y tablas en base de datos bdboticacusco
$tables = $pdo->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);
assertTest("Base de datos tiene al menos 10 tablas", count($tables) >= 10);
assertTest("Existe tabla 'productos'", in_array('productos', $tables));
assertTest("Existe tabla 'pedidos'", in_array('pedidos', $tables));
assertTest("Existe tabla 'inventario_movimientos'", in_array('inventario_movimientos', $tables));

// Test 2: Catálogo con productos activos
$prodCount = (int)$pdo->query("SELECT COUNT(*) FROM productos WHERE estado = 'activo'")->fetchColumn();
assertTest("Existen productos activos en inventario ($prodCount productos)", $prodCount > 0);

// Test 3: Verificación de login con hash seguro
$userStmt = $pdo->prepare("SELECT password FROM usuarios WHERE email = ?");
$userStmt->execute(['admin@boticacusco.pe']);
$hash = $userStmt->fetchColumn();
assertTest("Usuario Administrador tiene contraseña válida", password_verify('Admin123!', $hash));

// Test 4: Cálculo de Carrito y Totales
$_SESSION['cart'] = [
    1 => ['id' => 1, 'cantidad' => 2] // Panadol
];
$totals = calculateCartTotals($pdo, 'BIENVENIDO10', 'local');
assertTest("Subtotal de carrito calculado correctamente", $totals['subtotal'] > 0);
assertTest("Cupón BIENVENIDO10 aplicado (-10%)", $totals['descuento'] > 0);
assertTest("Cálculo de IGV mayor a 0", $totals['igv'] > 0);
assertTest("Costo de envío local asignado", $totals['costo_envio'] == 8.00);

// Test 5: Generación de código de pedido
$orderNum = generateOrderNumber($pdo);
assertTest("Formato de número de pedido válido ($orderNum)", strpos($orderNum, 'PED-') === 0);

echo "\n============================================\n";
echo "RESULTADOS: $testsPassed pruebas aprobadas, $testsFailed pruebas fallidas.\n";
if ($testsFailed > 0) {
    exit(1);
}
echo "¡TODAS LAS PRUEBAS PASARON EXITOSAMENTE!\n";
