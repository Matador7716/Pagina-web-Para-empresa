jQuery(document).ready(function($) {
    const $button = $('#notaria-chatbot-button');
    const $window = $('#notaria-chatbot-window');
    const $close = $('#notaria-chatbot-close');
    const $send = $('#notaria-chatbot-send');
    const $input = $('#notaria-chatbot-text');
    const $messages = $('#notaria-chatbot-messages');

    $button.on('click', function() {
        $window.toggle();
        if ($window.is(':visible') && $messages.children().length === 0) {
            addMessage('¡Hola! Bienvenido a Notaria Huanca. ¿En qué podemos ayudarte hoy?', 'bot');
        }
    });

    $close.on('click', function() {
        $window.hide();
    });

    $send.on('click', function() {
        sendMessage();
    });

    $input.on('keypress', function(e) {
        if (e.which === 13) {
            sendMessage();
        }
    });

    function sendMessage() {
        const message = $input.val().trim();
        if (message === '') return;

        addMessage(message, 'visitor');
        $input.val('');

        $.ajax({
            url: notariaChatbotData.ajax_url,
            type: 'POST',
            data: {
                action: 'notaria_chatbot_message',
                nonce: notariaChatbotData.nonce,
                message: message
            },
            success: function(response) {
                if (response.success) {
                    addMessage(response.data.response, 'bot');
                } else {
                    addMessage('Error: No se pudo obtener respuesta.', 'bot');
                }
            },
            error: function() {
                addMessage('Error de conexión.', 'bot');
            }
        });
    }

    function addMessage(text, sender) {
        const msgClass = sender === 'visitor' ? 'visitor-msg' : 'bot-msg';
        const $msgDiv = $('<div class="chatbot-msg"></div>').addClass(msgClass).text(text);
        $messages.append($msgDiv);
        $messages.scrollTop($messages[0].scrollHeight);
    }
});
