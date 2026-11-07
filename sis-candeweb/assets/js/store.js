/**
 * SIS CandeWeb Ventas - Store JavaScript
 */

document.addEventListener('DOMContentLoaded', () => {
    // Agregar producto al carrito vía AJAX
    document.querySelectorAll('.btn-add-cart').forEach(button => {
        button.addEventListener('click', async (e) => {
            e.preventDefault();
            const productId = button.dataset.productId;
            const quantity = parseInt(button.dataset.quantity || 1);

            try {
                const response = await fetch('ajax/cart_handler.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: `action=add&product_id=${productId}&quantity=${quantity}`
                });

                const data = await response.json();
                if (data.success) {
                    // Actualizar contador en header
                    const badge = document.querySelector('.cart-count-badge');
                    if (badge) {
                        badge.textContent = data.cartCount;
                        badge.classList.remove('d-none');
                    }
                    showToast('Éxito', data.message || 'Producto agregado al carrito', 'success');
                } else {
                    showToast('Aviso', data.message || 'No se pudo agregar', 'warning');
                }
            } catch (err) {
                console.error(err);
                showToast('Error', 'Hubo un error de conexión', 'danger');
            }
        });
    });

    // Wishlist Toggle
    document.querySelectorAll('.product-wishlist-btn').forEach(btn => {
        btn.addEventListener('click', async (e) => {
            e.preventDefault();
            const productId = btn.dataset.productId;
            try {
                const response = await fetch('ajax/wishlist_handler.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: `action=toggle&product_id=${productId}`
                });
                const data = await response.json();
                if (data.success) {
                    btn.classList.toggle('active', data.added);
                    const icon = btn.querySelector('i');
                    if (icon) {
                        icon.className = data.added ? 'bi bi-heart-fill' : 'bi bi-heart';
                    }
                    showToast('Lista de Deseos', data.message, 'info');
                } else {
                    if (data.need_login) {
                        window.location.href = 'login.php?msg=login_required_wishlist';
                    } else {
                        showToast('Aviso', data.message, 'warning');
                    }
                }
            } catch (err) {
                console.error(err);
            }
        });
    });
});

function showToast(title, message, type = 'info') {
    let container = document.getElementById('toast-container');
    if (!container) {
        container = document.createElement('div');
        container.id = 'toast-container';
        container.className = 'toast-container position-fixed bottom-0 start-0 p-3';
        container.style.zIndex = '1090';
        document.body.appendChild(container);
    }

    const toastEl = document.createElement('div');
    toastEl.className = `toast align-items-center text-bg-${type} border-0 show shadow`;
    toastEl.setAttribute('role', 'alert');
    toastEl.innerHTML = `
        <div class="d-flex">
            <div class="toast-body">
                <strong>${title}:</strong> ${message}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
        </div>
    `;
    container.appendChild(toastEl);
    setTimeout(() => {
        toastEl.remove();
    }, 3500);
}
