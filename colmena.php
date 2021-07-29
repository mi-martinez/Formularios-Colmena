<?php
if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $secondName = $_POST['secondName'];
    $firstSurname = $_POST['firstSurname'];
    $secondSurname = $_POST['secondSurname'];
    $email = $_POST['email'];
    $dateBirth = $_POST['dateBirth'];
    $phone = $_POST['phone'];
    $policy1 = $_POST['policy1'];
}

if (isset($_POST['verify'])) {
    $radioValue = $_POST['radio-value'];
    $identificationCard = $_POST['identificationCard'];
    $expeditionDate = $_POST['expeditionDate'];
    $occupation = $_POST['occupation'];
    $reCode = $_POST['reCode'];
    $policy2 = $_POST['policy2'];
    $stepStatus = $_POST['stepStatus'];

    $vName = $_POST['vName'];
    $vDocument = $_POST['vDocument'];
    $vEmail = $_POST['vEmail'];
    $vPhone = $_POST['vPhone'];
    $vPay = $_POST['vPay'];
}
?>

<!DOCTYPE html>
<html lang="es-CO">

<head>
    <link href="s.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body style="margin-left:15%; margin-right:15%;">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div id="form1">
            <h1>Tu Diario Asegurado</h1>
            <p>Solicitar tu seguro es fácil, por favor completa los siguientes datos.</p>
            <div class="info-name">
                <div class="material-input">
                    <input type="text" name="firstName" value="<?php if (isset($firstName)) echo $firstName ?>" placeholder="&nbsp;">
                    <label id="lb_firstName">Primer Nombre:</label>
                </div>
                <div class="material-input">
                    <input type="text" name="secondName" value="<?php if (isset($secondName)) echo $secondName ?>" placeholder="&nbsp;">
                    <label>Segundo Nombre:</label>
                </div>
            </div>
            <div class="info-name">
                <div class="material-input">
                    <input type="text" name="firstSurname" value="<?php if (isset($firstSurname)) echo $firstSurname ?>" placeholder="&nbsp;">
                    <label>Primer Apellido:</label>
                </div>
                <div class="material-input">
                    <input type="text" name="secondSurname" value="<?php if (isset($secondSurname)) echo $secondSurname ?>" placeholder="&nbsp;">
                    <label>Segundo Apellido:</label>
                </div>
            </div>
            <div class="date-input material-input">
                <input type="date" name="dateBirth" value="1999-01-17">
                <label>Fecha de nacimiento:</label>
            </div>
            <div class="info-name">
                <div class="material-input">
                    <input type="email" name="email" value="<?php if (isset($email)) echo $email ?>" placeholder="&nbsp;">
                    <label>Correo electrónico:</label>
                </div>
            </div>
            <div class="info-name">
                <div class="material-input">
                    <input type="tel" name="phone" value="<?php if (isset($phone)) echo $phone ?>" pattern="[0-9]+" placeholder="&nbsp;">
                    <label>Número Celular:</label>
                </div>
            </div>
            <div class="info-name">
                <div class="material-inline">
                    <label class="contain-check">
                        <p class="aceppt">He leído y autorizo el <span class="acept"> tratamiento de datos
                                personales.</span>
                        </p>
                        <input type="checkbox" name="policy2" value="<?php if (isset($policy2)) echo $policy2 = 1 ?>" id="policy2" data-required="1"><span class="checkmark" checked="checked"></span>
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
            <div class="row-submit">
                <input class="hidden" style="display:none;" type="submit" value="Adquirir Seguro" id="formOne">
                <input class="hidden" style="display:none;" type="submit" value="Adquirir Seguro" id="sendInfoFormOne">
                <input type="submit" name="submit" value="Adquirir Seguro">
            </div>
        </div>


        <div class="" id="form2">
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

            <div class="paso1 order-item" name="paso1" id="paso_1">
                <div class="radio-group">
                    <div class="info-name row-fw">
                        <div class="card radio" data-value="75b96ad4-f7d9-4b10-95f4-49e08f3b1ada">
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
                        <div class="card radio" data-value="07693e33-bf0d-4e83-b763-31d027e12017">
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
                    <input type="text" class="itemval" id="radio-value" name="radio-value" readonly>
                </div>
            </div>

            <div class="paso2" name="paso2" id="paso_2">
                <div class="info-name">
                    <div class="material-input">
                        <input type="number" name="identificationCard" id="identificationCard" placeholder="&nbsp;" pattern="[0-9]+">
                        <label>Cédula:</label>
                    </div>
                </div>
                <div class="date-input material-input">
                    <input type="date" name="expeditionDate" id="expeditionDate">
                    <label>Fecha de expedición de la cédula:</label>
                </div>
                <div class="info-name">
                    <div class="material-input">
                        <input type="text" name="occupation" id="occupation" placeholder="&nbsp;">
                        <label>Ocupación:</label>
                    </div>
                </div>

            </div>

            <div class="paso2-verify" id="paso_2_verify">
                <div class="info-name">
                    <!-- CAMBIAR POR CODE VERIFY -->
                    <input type="number" name="reCode" id="reCode">
                    <div class="resend">¿Reenviar código?</div>
                </div>
                <div class="row-submit">
                    <input type="submit" id="verify" class="next" name="verify" value="Verificar" />
                </div>
            </div>

            <div class="paso3" name="paso3" id="paso_3">
                <!--  <div class="resume">
                    <div class="item-tittle">Plan A</div>
                    <div class="data-name">Nombres: <span>Michael Martinez</span></div>
                    <div class="data-id">Cédula: <span>1022943269</span></div>
                    <div class="data-mail">Correo Electrónico: <span>michael@gmail.com</span></div>
                    <div class="data-phone">Celular: <span>3227409090</span></div>
                    <div class="data-total">Total a pagar: <span>50.000</span></div>
                </div> -->
                <div class="resume">
                    <div class="item-tittle">Plan A</div>
                    <div class="data-name">Nombres: <input disabled type="text" name="vName" id="vName" class="showProperty" value="Carlos Ortiz"> </div>
                    <div class="data-id">Cédula: <input disabled type="number" name="vDocument" id="vDocument" class="showProperty" value="1022943269"> </div>
                    <div class="data-mail">Correo Electrónico: <input disabled type="email" name="vEmail" id="vEmail" class="showProperty" value="michael@gmail.com"> </div>
                    <div class="data-phone">Celular: <input type="number" disabled name="vPhone" id="vPhone" class="showProperty" value="3227409090"> </div>
                    <div class="data-total">Total a pagar: <input disabled type="number" name="vPay" id="vPay" class="showProperty" value="50.000" style="text-align:right;font-weight: 900;"> </div>
                </div>
                <img src="http://tudiarioasegurado.artico.website/wp-content/uploads/2021/07/pay.png" alt="formas de pago">
                <div class="info-name">
                    <div class="material-inline">
                        <label class="contain-check">
                            <p class="aceppt">Acepto los términos, condiciones, declaraciones y autorizaciones de la poliza.
                            </p>
                            <input type="checkbox" name="policy2" id="policy2" data-required="1"><span class="checkmark" checked="checked"></span>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="conclusion">Recibirás un correo con toda la información relacionada con tu poliza, tambien allí
                    podrás designar tus beneficiarios. Mientras esto ocurre, los beneficiarios de tu seguro serán los de
                    ley, es
                    decir: tu cónyuge o compañero(a) permanente, en la mitad del seguro, y tus herederos en la otra mitad.
                </div>
                <input class="hidden" style="display:none;" type="submit" value="Pagar">
            </div>

            <div class="buttons-steps" id="buttons_steps">
                <div class="row-submit">
                    <div id="next" class="next">Continuar</div>
                </div>
                <div class="row-submit">
                    <div id="prev" class="prev">Regresar</div>
                </div>
            </div>
        </div>

        <input type="text" id="stepStatus" name="stepStatus" class="hidden" value="step1">

        <?php
        include("generatePolicy.php");
        ?>

    </form>
</body>

</html>

<script>
    localStorage.setItem('firstName', '<?php echo $_SESSION['firstName']; ?>');
    localStorage.setItem('secondName', '<?php echo $_SESSION['secondName']; ?>');
    localStorage.setItem('firstSurname', '<?php echo $_SESSION['firstSurname']; ?>');
    localStorage.setItem('secondSurname', '<?php echo $_SESSION['secondSurname']; ?>');
    localStorage.setItem('email', '<?php echo $_SESSION['email']; ?>');
    localStorage.setItem('dateBirth', '<?php echo $_SESSION['dateBirth']; ?>');
    localStorage.setItem('phone', '<?php echo $_SESSION['phone']; ?>');
    localStorage.setItem('policy1', '<?php echo $_SESSION['policy1']; ?>');

    localStorage.setItem('radio-value', '<?php echo $_SESSION['radio-value']; ?>');
    localStorage.setItem('identificationCard', '<?php echo $_SESSION['identificationCard']; ?>');
    localStorage.setItem('expeditionDate', '<?php echo $_SESSION['expeditionDate']; ?>');
    localStorage.setItem('occupation', '<?php echo $_SESSION['occupation']; ?>');
    localStorage.setItem('reCode', '<?php echo $_SESSION['reCode']; ?>');
    localStorage.setItem('policy2', '<?php echo $_SESSION['policy2']; ?>');
</script>

<script>
    jQuery(function($) {
        $('.radio-group .radio').click(function() {
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
            var compra = $(this).attr('data-value');
            //alert(compra);
            $('.order-item').parent().find('input.itemval').val(compra);
        });
    });
</script>


<!-- <script type="text/javascript">
    /*  fetch('https://textbelt.com/text', {
         method: 'post',
         headers: { 'Content-Type': 'application/json' },
         body: JSON.stringify({
             phone: '5555555555',
             message: 'Hello world',
             key: 'textbelt',
         }),
     }).then(response => {
         return response.json();
     }).then(data => {
         console.log(data);
     }); *
    const onlyLetters = (e) => {
        keyCode = e.keyCode || e.which
        key = String.fromCharCode(keyCode).toLowerCase()
        letter = ' áéíóúabcdefghijklmnñopqrstuvwxyz'
        special = '8-37-39-46'
        specialKey = false
        for (var i in special) {
            if (keyCode == special[i]) {
                specialKey = true;
                break;
            }
        }
        if (letter.indexOf(key) == -1 && !specialKey)
            return false;
    }
    const onlyNumbers = (evt) => {
        let code = (evt.which) ? evt.which : evt.keyCode
        if (code == 8) return true
        else if (code >= 48 && code <= 57)
            return true
        else
            return false
    }
    let dateBirth = '',
        year = '',
        month = '',
        yearPerson = '';
    const currentYear = new Date().getFullYear();
    document.querySelector('#dateBirth').addEventListener('change', (e) => {
        dateBirth = document.querySelector('#dateBirth').value;
        year = parseInt(dateBirth.split('-')[0]) + 18;
        month = parseInt(dateBirth.split('-')[1]) + 02;
        const auxExpeditionDate = `${year}-${month}-03`;
        console.log('auxExpeditionDate:::', auxExpeditionDate)
        console.log(new Date(auxExpeditionDate).toISOString())
        document.querySelector('#expeditionDate').value = new Date(auxExpeditionDate).toISOString().split('T')[0];
        yearPerson = parseInt(dateBirth.split('-')[0]);
    })
    $("#sendInfoFormOne").on("click", async (event) => {
        event.preventDefault();
        const firstName = document.querySelector('#firstName').value;
        const secondName = document.querySelector('#secondName').value;
        const firstSurname = document.querySelector('#firstSurname').value;
        const secondSurname = document.querySelector('#secondSurname').value;
        const email = document.querySelector('#email').value;
        const phone = document.querySelector('#phone').value;
        const occupation = document.querySelector('#occupation').value;
        const identificationCard = document.querySelector('#identificationCard').value;
        const policy = document.querySelector('#policy').checked;
        const policy2 = document.querySelector('#policy2').checked;
        const PLAN_CODES = {
            'plan A': "75b96ad4-f7d9-4b10-95f4-49e08f3b1ada",
            planB: "07693e33-bf0d-4e83-b763-31d027e12017",
            planC: "1b5e055a-c08c-4a52-b402-9453464a84ca",
            planD: "7b713dc7-79e8-4b3a-94bd-d493f5204cb0"
        }
        const SUB_PLAN_ID = {
            planA: "6f08437e-8c4c-4f35-af12-9dbe3d191ecc",
            planB: "d58c7e9d-ffbd-4783-b7b0-959bfc21e1f2",
            planC: "3b588195-6585-4dcc-83f1-90f7b008b620",
            planD: "a13e19a2-f455-432e-861b-a1dbdea8a715"
        }
        const planCode = PLAN_CODES['planA'] || "75b96ad4-f7d9-4b10-95f4-49e08f3b1ada";
        const subPlanId = SUB_PLAN_ID['planA'] || "6f08437e-8c4c-4f35-af12-9dbe3d191ecc";
        let form1 = document.querySelector('#form1');
        if (firstName.length === 0)
            alert('Campo del segundo nombre se encuentra vacio')
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
        else if ((currentYear - yearPerson) >= 18) {
            if (firstName.length > 0 && secondName.length > 0 && firstSurname.length > 0 && secondSurname.length > 0 &&
                dateBirth.length > 0 && email.length > 0 && phone.length > 0 && policy === true) {
                form1.classList.add("hidden");
                const expeditionDate = document.querySelector('#expeditionDate').value;
                // $("#formOne").click();
                if (identificationCard.length === 0)
                    alert('Campo del segundo nombre se encuentra vacio')
                else if (expeditionDate.length === 0)
                    alert('Campo del segundo nomb re se encuentra vacio')
                else if (occupation.length === 0)
                    alert('Campo del segundo nomb re se encuentra vacio')
                else {
                    //showFormTWo
                    //validate
                    //ajaxx del proceso xd
                    //if (policy === true && policy2 == true)
                    const dataEncrypt = {
                        sourcePolicyGenerate: "AA1FCBB5-7E2F-41C9-BE76-3630A5A34132",
                        insuranceEntity: {
                            GeneralDataInsurance: {
                                InsuranceId: "3013e5d9-2e21-41c6-98c2-3a77e99a40e2",
                                PlanId: planCode,
                                SubPlanId: subPlanId,
                                PaymentFrequencyId: "9dd41eee-1ba0-4fb9-ad77-fb169f28f963",
                                AutomaticRenewal: false,
                                PaymentPromoter: false,
                                VerificationCodeId: "0ef36a72-0909-48cf-b556-ed086694cc86",
                                PostDestinationFinalAssistance: false,
                                SecondMedicalOpinion: false
                            },
                            PolicyHolder: {
                                Name1: firstName,
                                Name2: secondName,
                                LastName1: firstSurname,
                                LastName2: secondSurname,
                                DocumentTypeId: "9dd41eee-1ba0-4fb9-ad77-fb169f28f910",
                                DocumentNumber: identificationCard || "1117552597",
                                Cellphone: phone,
                                GenderId: "9dd41eee-1ba0-4fb9-ad77-fb169f28f972",
                                BirthDate: `${dateBirth}T05:00:00.000Z`,
                                CountryBirth: "",
                                DepartmentBirth: "11",
                                CityBirth: "11001",
                                IdentificationExpeditionDate: `${expeditionDate}T05:00:00.000Z`,
                                CivilStatusId: "",
                                Address: "Sin direccion nn",
                                HomeCountry: "",
                                HomeDepartment: "11",
                                HomeCity: "11001",
                                Email: email,
                                OccupationId: "82f5deab-316e-4721-bac7-20d8ca4cfc40" || occupation,
                                InsuranceCostBasicCoverage: null
                            },
                            BeneficiaryList: [],
                            Pep: {
                                IsPersonExposedPublicy: false,
                                HasLinkPersonExposedPublicy: false,
                                AdministersPublicResources: false,
                                TaxObligationsOtherCountry: false,
                                CountriesTaxObligations: null,
                                ListPersonExposedPublicy: null
                            },
                            Sarlaft: null,
                            Authorizations: {
                                Authorization1: true,
                                Authorization2: true,
                                Authorization3: true
                            }
                        }
                    }
                    const stringDataEncrypt = JSON.stringify(dataEncrypt);
                    const settings = {
                        "url": "http://192.168.217.114:1022/Services/Cryptography/encrypt",
                        "method": "POST",
                        "timeout": 0,
                        "headers": {
                            "Content-Type": "application/json"
                        },
                        "data": JSON.stringify({
                            "bodyData": stringDataEncrypt
                        })
                    };
                    const response = await $.ajax(settings);
                    console.log('response:::', response)
                    const settings2 = {
                        "url": "http://192.168.217.114:1022/Services/PolicyIssuance/generatePolicy",
                        "method": "POST",
                        "timeout": 0,
                        "headers": {
                            "Content-Type": "application/json"
                        },
                        "data": JSON.stringify({
                            "bodyData": response
                        })
                    };
                    const response2 = await $.ajax(settings2);
                    console.log('response2:::', response2);
                    const settings3 = {
                        "url": "http://192.168.217.114:1022/Services/Cryptography/decrypt",
                        "method": "POST",
                        "timeout": 0,
                        "headers": {
                            "Content-Type": "application/json"
                        },
                        "data": JSON.stringify({
                            "bodyData": response2
                        })
                    };
                    const response3 = await $.ajax(settings3)
                    console.log('response3:::', response3);
                }
            }
        } else {
            alert('Lo sentimos, no puede adquirir el producto, por fuera de rango de edad')
        }
    });
    /*
     * Validación con el spam abajo del label para los campos
     * Sacar una clase hidden para formularios
     * No cumplen los requisitos
     * Url param en wordpress
     * SMS verify
     *
     *
    jQuery(function($) {
        $('.radio-group .radio').click(function() {
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
            var compra = $(this).attr('data-value');
            //alert(compra);
            $('.order-item').parent().find('input.itemval').val(compra);
        });
    });*/
</script> -->