<?php
include_once "includes/header.php";
?>

<div class="container-fluid">
    <h2 class="mb-4">Simulador de Chat IA (WhatsApp)</h2>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"><i class="fab fa-whatsapp me-2"></i> Simular Conversación</h5>
                </div>
                <div class="card-body" id="chatWindow" style="height: 400px; overflow-y: auto; background-color: #e5ddd5; padding: 15px;">
                    <div class="text-center text-muted mb-3 small">Hoy</div>
                    <!-- Messages will appear here -->
                </div>
                <div class="card-footer">
                    <form id="chatForm" class="d-flex">
                        <input type="text" id="userInput" class="form-control me-2" placeholder="Escribe un mensaje..." required>
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Instrucciones</h5>
                </div>
                <div class="card-body">
                    <p>Este simulador permite probar las <strong>Respuestas Automáticas</strong> que has configurado.</p>
                    <ol>
                        <li>Escribe una palabra clave (ej: "hola", "precios").</li>
                        <li>El sistema buscará en la base de datos de preguntas frecuentes.</li>
                        <li>Si no encuentra una coincidencia exacta, responderá con el <strong>Mensaje de Bienvenida</strong> creativo.</li>
                        <li>Todas las interacciones se guardarán en el Monitor de Chats.</li>
                    </ol>
                    <hr>
                    <h6>Número Simulado:</h6>
                    <input type="text" id="simulatedPhone" class="form-control mb-3" value="51905590656">
                    <button class="btn btn-outline-info" onclick="iniciarConversacionAnimada()">
                        <i class="fas fa-rocket me-2"></i> Probar Inicio Animado
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .msg-container {
        display: flex;
        margin-bottom: 15px;
    }
    .msg-user {
        justify-content: flex-end;
    }
    .msg-bubble {
        max-width: 80%;
        padding: 8px 12px;
        border-radius: 10px;
        position: relative;
    }
    .msg-user .msg-bubble {
        background-color: #dcf8c6;
    }
    .msg-bot .msg-bubble {
        background-color: #fff;
    }
</style>

<?php include_once "includes/footer.php"; ?>

<script>
function appendMessage(text, type) {
    let alignment = type === 'user' ? 'msg-user' : 'msg-bot';
    let html = `
        <div class="msg-container ${alignment}">
            <div class="msg-bubble shadow-sm">
                ${text}
                <div class="text-end" style="font-size: 0.7rem; opacity: 0.6;">${new Date().toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'})}</div>
            </div>
        </div>
    `;
    $('#chatWindow').append(html);
    $('#chatWindow').scrollTop($('#chatWindow')[0].scrollHeight);
}

function iniciarConversacionAnimada() {
    $.ajax({
        url: 'ajax/bot_logic.php',
        type: 'POST',
        data: { action: 'get_welcome' },
        success: function(response) {
            appendMessage(response, 'bot');
        }
    });
}

$('#chatForm').on('submit', function(e) {
    e.preventDefault();
    let msg = $('#userInput').val();
    let phone = $('#simulatedPhone').val();
    if (!msg) return;

    appendMessage(msg, 'user');
    $('#userInput').val('');

    $.ajax({
        url: 'ajax/bot_logic.php',
        type: 'POST',
        data: {
            mensaje: msg,
            telefono: phone,
            action: 'reply'
        },
        success: function(response) {
            setTimeout(() => {
                appendMessage(response, 'bot');
            }, 500);
        }
    });
});
</script>
