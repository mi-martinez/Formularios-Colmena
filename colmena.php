<form action="" method="post">
    <h1>Tu Diario Asegurado</h1>
    <p>Solicitar tu seguro es fácil, por favor completa los siguientes datos.</p>
    <div class="info-name">
        <div class="material-input">
            <input type="text" name="firstName" id="firstName" onkeypress="return letters(event)" placeholder="&nbsp;">
            <label>Primer Nombre:</label>
        </div>
        <div class="material-input">
            <input type="text" name="secondName" id="secondName" onkeypress="return letters(event)"
                placeholder="&nbsp;">
            <label>Segundo Nombre:</label>
        </div>
    </div>
    <div class="info-name">
        <div class="material-input">
            <input type="text" name="firstSurname" id="firstSurname" onkeypress="return letters(event)"
                placeholder="&nbsp;">
            <label>Primer Apellido:</label>
        </div>
        <div class="material-input">
            <input type="text" name="secondSurname" id="secondSurname" onkeypress="return letters(event)"
                placeholder="&nbsp;">
            <label>Segundo Apellido:</label>
        </div>
    </div>
    <div class="date-input material-input">
        <input type="date" name="dateBirth" id="dateBirth">
        <label>Fecha de nacimiento:</label>
    </div>
    <div class="info-name">
        <div class="material-input">
            <input type="email" name="email" id="email" placeholder="&nbsp;">
            <label>Correo electrónico:</label>
        </div>
    </div>
    <div class="info-name">
        <div class="material-input">
            <input type="tel" name="phone" id="phone" onkeypress="return valideKey(event)" pattern="[0-9]+"
                placeholder="&nbsp;">
            <label>Número Celular:</label>
        </div>
    </div>
    <div class="info-name">
        <div class="material-inline">
            <label class="contain-check">
                <p class="aceppt">He leído y autorizo el <span class="acept"> tratamiento de datos personales.</span>
                </p>
                <input type="checkbox" name="policy" id="policy" data-required="1"><span class="checkmark"
                    checked="checked"></span>
                <span class="checkmark"></span>
            </label>
        </div>
    </div>
    <div class="row-submit">
        <input class="hidden" style="display:none;" type="submit" value="Adquirir Seguro" id="formOne">
        <input type="submit" value="Adquirir Seguro" id="sendInfoFormOne">
    </div>
</form>

<!-- SEGUNDO FORMULARIO -->

<form action="" method="post">
    <div class="steps">
        <div class="step1 active">1</div>
        <div class="step2">2</div>
        <div class="step3">3</div>
    </div>
    <div class="text-step uno">
        <h1>Paso 1</h1>
        <p>Selecciona el plan que deseas.</p>
    </div>
    <div class="text-step dos">
        <div class="dos-1">
            <h1>Paso 2</h1>
            <p>¡Estás a un paso de adquirir tu seguro! Completa los datos para continuar.</p>
        </div>
        <div class="dos-2">
            <h1>Validación</h1>
            <p>Te hemos enviado un mensaje de texto SMS con el codigo de verificación a tu número de celular:</p>
            <div class="phone-conf">+57 3227409090</div>
        </div>
        <div class="text-step uno">
            <h1>Paso 3</h1>
            <p>Resumen de la compra.</p>
        </div>
    </div>
    <div class="paso1 order-item">
        <div class="radio-group">
            <div class="info-name row-fw">
                <div class="card radio" data-value="Plan A">
                    <div class="item-sup-v">
                        <h3 class="tittle-card">PLAN A</h3>
                        <div class="totals">$ 50.000 <span class="small">/año</span></div>
                    </div>
                    <div class="plans">
                        <div class="line-div">
                            <div class="icon-card">Renta diaria por incapacidad accidental</div>
                            <div class="price">$ 20.000</div>
                        </div>
                        <div class="line-div">
                            <div class="icon-card">Muerte accidental</div>
                            <div class="price">$ 5’000.000</div>
                        </div>
                        <div class="line-div">
                            <div class="icon-card">Incapacidad total y permanente accidental</div>
                            <div class="price">$ 5’000.000</div>
                        </div>
                    </div>

                </div>
                <div class="card radio" data-value="Plan B">
                    <div class="item-sup-v">
                        <h3 class="tittle-card">PLAN B</h3>
                        <div class="totals">$ 97.500 <span class="small">/año</span></div>
                    </div>
                    <div class="plans">
                        <div class="line-div">
                            <div class="icon-card">Renta diaria por incapacidad accidental</div>
                            <div class="price">$ 40.000</div>
                        </div>
                        <div class="line-div">
                            <div class="icon-card">Muerte accidental</div>
                            <div class="price">$ 10’000.000</div>
                        </div>
                        <div class="line-div">
                            <div class="icon-card">Incapacidad total y permanente accidental</div>
                            <div class="price">$ 10’000.000</div>
                        </div>
                    </div>

                </div>
            </div>
            <input type="text" class="itemval" id="" name="radio-value" readonly>
        </div>
    </div>
    <div class="paso2">
        <div class="info-name">
            <div class="material-input">
                <input type="number" name="" id="" placeholder="&nbsp;" onkeypress="return valideKey(event)"
                    pattern="[0-9]+">
                <label>Cédula::</label>
            </div>
        </div>
        <div class="date-input material-input">
            <input type="date" name="" id="expeditionDate">
            <label>Fecha de expedición de la cédula:</label>
        </div>
        <div class="info-name">
            <div class="material-input">
                <input type="text" name="" id="" placeholder="&nbsp;">
                <label>Ocupación:</label>
            </div>
        </div>
    </div>
    <div class="paso2-verify">
        <div class="info-name">
            <!-- CAMBIAR POR CODE VERIFY -->
            <input type="number" name="" id="">
            <div class="resend">¿Reenviar código?</div>
        </div>
        <div class="row-submit">
            <div id="verify" class="next">Verificar</div>
        </div>
    </div>
    <div class="paso3">
        <div class="resume">
            <div class="item-tittle">Plan A</div>
            <div class="data-name">Nombres: <span>Michael Martinez</span></div>
            <div class="data-id">Cédula: <span>1022943269</span></div>
            <div class="data-mail">Correo Electrónico: <span>michael@gmail.com</span></div>
            <div class="data-phone">Celular: <span>3227409090</span></div>
            <div class="data-total">Total a pagar: <span>50.000</span></div>
        </div>
        <img src="http://tudiarioasegurado.artico.website/wp-content/uploads/2021/07/pay.png" alt="formas de pago">
        <div class="info-name">
            <div class="material-inline">
                <label class="contain-check">
                    <p class="aceppt">Acepto los términos, condiciones, declaraciones y autorizaciones de la poliza.
                    </p>
                    <input type="checkbox" name="" id="" data-required="1"><span class="checkmark"
                        checked="checked"></span>
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>
        <div class="conclusion">Recibirás un correo con toda la información relacionada con tu poliza, tambien allí
            podrás designar tus beneficiarios. Mientras esto ocurre, los beneficiarios de tu seguro serán los de ley, es
            decir: tu cónyuge o compañero(a) permanente, en la mitad del seguro, y tus herederos en la otra mitad.
        </div>
        <input type="submit" value="Pagar">

    </div>

    <div class="buttons-steps">
        <div class="row-submit">
            <div id="next" class="next">Continuar</div>
        </div>
        <div class="row-submit">
            <div id="prev" class="prev">Regresar</div>
        </div>
    </div>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
    const letters = (e) => {
        key = e.keyCode || e.which;
        tecla = String.fromCharCode(key).toLowerCase();
        letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
        especiales = "8-37-39-46";

        tecla_especial = false
        for (var i in especiales) {
            if (key == especiales[i]) {
                tecla_especial = true;
                break;
            }
        }

        if (letras.indexOf(tecla) == -1 && !tecla_especial) {
            return false;
        }
    }

    function valideKey(evt) {
        // code is the decimal ASCII representation of the pressed key.
        var code = (evt.which) ? evt.which : evt.keyCode;

        if (code == 8) { // backspace.
            return true;
        } else if (code >= 48 && code <= 57) { // is a number.
            return true;
        } else { // other keys.
            return false;
        }
    }

    function limpia() {
        var val = document.getElementById("miInput").value;
        var tam = val.length;
        for (i = 0; i < tam; i++) {
            if (!isNaN(val[i]))
                document.getElementById("miInput").value = '';
        }
    }

    $("#sendInfoFormOne").on("click", (event) => {
        event.preventDefault();
        const firstName = document.querySelector('#firstName').value;
        const secondName = document.querySelector('#secondName').value;
        const firstSurname = document.querySelector('#firstSurname').value;
        const secondSurname = document.querySelector('#secondSurname').value;
        const dateBirth = document.querySelector('#dateBirth').value;
        const email = document.querySelector('#email').value;
        const phone = document.querySelector('#phone').value;
        const policy = document.querySelector('#policy').checked;

        if (firstName.length === 0)
            alert('Campo del primer nombre se encuentra vacio')
        else if (secondName.length === 0)
            alert('Campo del segundo nombre se encuentra vacio')
        else if (firstSurname.length === 0)
            alert('Campo del primer apellido se encuentra vacio')
        else if (secondSurname.length === 0)
            alert('Campo del segundo apellido se encuentra vacio')
        else if (dateBirth.length === 0)
            alert('Campo del fecha de nacimiento se encuentra vacio')
        else if (email.length === 0)
            alert('Campo del correo electrónico se encuentra vacio')
        else if (phone.length === 0)
            alert('Campo del número telefonico se encuentra vacio')
        else if (policy === false)
            alert('Acepte el tratamiento de datos personales.')
        else if (firstName.length > 0 && secondName.length > 0 &&
            firstSurname.length > 0 && secondSurname.length
            > 0 && dateBirth.length > 0 && email.length > 0 && phone.length > 0 && policy === true)
            $("#formOne").click();
    });

    document.querySelector('#dateBirth').addEventListener('change', e => {
        const dateBirth = document.querySelector('#dateBirth').value;

        const year = parseInt(dateBirth.split('-')[0]) + 18;
        const month = parseInt(dateBirth.split('-')[1]) + 02;
        const expeditionDate = `${year}-${month}-03`;

        console.log(new Date(expeditionDate).toISOString().slice(0, 10))
        document.querySelector('#expeditionDate').value = new Date(expeditionDate).toISOString().slice(0, 10);
    })

</script>