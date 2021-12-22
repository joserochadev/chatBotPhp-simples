(function(){
    $(document).ready(function(){
        // função que vai pegar a pergunta do usuario
        $("#btn").on("click", function(){
            $value = $("#data").val();
            $msg = `<div class="user-inbox inbox">
                        <div class="msg-header">
                            <p>${$value}</p>
                        </div>
                    </div>`;
            $(".form").append($msg);
            $("#data").val('');

            // ajax
            $.ajax({
                url:'chatbot.php',
                type:'POST',
                data:'text='+$value,
                success: function(result){
                    // funçâo que vai mandar a resposta pro usuario
                    $replay = `<div class="bot-inbox inbox">
                    <div class="icon">
                        <div class="i fas fa-user"></div>
                    </div>
                    <div class="msg-header">
                        <p>${result}</p>
                    </div>
                    </div>`;

                $(".form").append($replay);
                scroll()
                }

            })
        });
    })

    function scroll(){
        let form = document.getElementsByClassName('form')[0]
        form.scrollTop = form.scrollHeight
    }


}())