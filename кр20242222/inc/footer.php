    <!--Start Footer-->
    <footer class="footer">
        <div class="conteiner text765">
            <div class="copyright text765">Время работы<br><br>Круглосуточно</div>

            <div class="copyright text765"><a class="menu-link" href="/nomera.php">Номера</a></div>
            
            <div class="copyright text765 ">Контактная информация
            <br><br>8(900)-900-99-90<br>tihaya-gavan@mail.ru</div>
        </div>
    </footer>
    <!--End Footer-->
    <style>
        .text765{
            display:flex;
            justify-content:space-around;
        }
    </style>
<script>
(()=>{
            "use strict"

            const forms = document.querySelectorAll('.needs-validation')

            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if(!form.checkValidity()){
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
</script>