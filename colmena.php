<!-- FORM A -->
<form onsubmit="return valid()" method="post">
    <h1>Tu Diario Asegurado</h1>
    <p>Solicitar tu seguro es fácil, por favor completa los siguientes datos.</p>
    <div class="info-name">
        <div class="material-input">
            <input type="text" name="firstName" id="firstName" maxlength="32" onkeypress="return onlyLetters(event)" placeholder="&nbsp;" />
            <label>Primer Nombre:</label>
            <label id="eName" class="hidden" style="font-size:12px;color:#E15132">Campo vacio</label>
        </div>
        <div class="material-input">
            <input type="text" name="secondName" id="secondName" maxlength="32" onkeypress="return onlyLetters(event)" placeholder="&nbsp;">
            <label>Segundo Nombre:</label>
            <label id="eName2" class="hidden" style="font-size:12px;color:#E15132">Campo vacio</label>
        </div>
    </div>
    <div class="info-name">
        <div class="material-input">
            <input type="text" name="firstSurname" id="firstSurname" maxlength="32" onkeypress="return onlyLetters(event)" placeholder="&nbsp;">
            <label>Primer Apellido:</label>
            <label id="eLastName" class="hidden" style="font-size:12px;color:#E15132">Campo vacio</label>
        </div>
        <div class="material-input">
            <input type="text" name="secondSurname" id="secondSurname" maxlength="32" onkeypress="return onlyLetters(event)" placeholder="&nbsp;">
            <label>Segundo Apellido:</label>
            <label id="eLastName2" class="hidden" style="font-size:12px;color:#E15132">Campo vacio</label>
        </div>
    </div>
    <div class="date-input material-input">
        <input type="date" name="dateBirth" id="dateBirth" onkeydown="return false" onchange="elog('change',this);return false;">
        <label>Fecha de nacimiento:</label>
        <label id="eDataBirth" class="hidden" style="font-size:12px;color:#E15132">Campo vacio</label>
    </div>
    <div class="info-name">
        <div class="material-input">
            <input type="email" name="email" id="email" placeholder="&nbsp;">
            <label>Correo electrónico:</label>
            <label id="eEmail" class="hidden" style="font-size:12px;color:#E15132">Campo vacio</label>
        </div>
    </div>
    <div class="info-name">
        <div class="material-input">
            <input type="tel" name="phone" id="phone" maxlength="10" onkeypress="return onlyNumbers(event)" pattern="[0-9]+" placeholder="&nbsp;">
            <label>Número Celular:</label>
            <label id="ePhone" class="hidden" style="font-size:12px;color:#E15132">Campo Vacio</label>
        </div>
    </div>
    <div class="info-name">
        <div class="material-inline">
            <label class="contain-check">
                <p class="aceppt">He leído y autorizo el <span class="acept custom-ult-modal overlay-show" data-class-id="content-610366471ba2d0-12259618" data-overlay-class="overlay-fade" data-keypress-control="keypress-control-enable" data-overlay-control="overlay-control-enable"> tratamiento de datos personales.</span>
                </p>
                <input type="checkbox" name="policy" id="policy" data-required="1">
                <span class="checkmark" checked="checked"></span>
                <span id="policyBorder" class="checkmark"></span>
            </label>
        </div>
    </div>
    <div class="modal-overlay" id="modal">
        <div class="modal-body">
            <h3>Autorización para el tratamiento de datos personales.</h3>
            <div class="text-over">
                <p>En calidad de titular de mi información personal, autorizo de manera expresa y previa a Colmena Seguros, entidad identificada con NIT 800226175-3, ubicada en Bogotá, en la Calle 72 # 10-71, piso 4, teléfono (1) 5141592, y a sus sucesores, cesionarios, o a quien represente u ostente sus derechos, para que directamente o a través de terceros, realicen el siguiente tratamiento sobre mi información personal por medios físicos, digitales y/o electrónicos:</p>
                <h5>AUTORIZACIÓN PARA EL TRATAMIENTO DATOS SENSIBLES</h5>
                <p>Autorizo que mi huella digital sea capturada por la Aseguradora, así como mis datos morfológicos (los obtenidos de fotografías, grabaciones de video o captura de iris, entre otros) y mis datos de salud se recolecten, almacenen, usen, circulen, supriman y, en general, se traten en procesos de identificación de condiciones de asegurabilidad para brindar coberturas del seguro, para garantizar la seguridad en sus instalaciones, y prevenir el fraude o suplantación.</p>
                <p>Declaro que me han informado de manera adecuada y suficiente sobre las finalidades con las cuales tratarán este dato sensible, y conozco que no me encuentro obligado(a) a autorizar su tratamiento. Sin embargo, entiendo que estos usos buscan dar más seguridad a mis datos en el desarrollo de mi relación contractual y lo encuentro razonable.</p>
                <h5>AUTORIZACIÓN PARA EL TRATAMIENTO DE OTROS DATOS PERSONALES</h5>
                <p>Autorizo a Colmena Seguros (Responsable), a quien represente sus derechos y a quien Ilegue a actuar como cesionar io de los mismos, de forma previa, expresa, inequívoca e irrevocable, a tratar mi información personal o la de mi representado, mientras se encuentren vigentes las siguientes finalidad es:</p>
                <h6>FINALIDADES ESENCIALES</h6>
                <p><span class="nu-ol">1</span>Para cumplir con los derechos y exigir las obligaciones de la relación contractual existente, directamente o a través de terceros contratados por la Aseguradora para ejercer labores propias de su objeto social (Encargados), como por ejemplo: la administración del seguro para el envío de pólizas, información sobre el seguro adquirido, intermediarios y reaseguradores, actividades de cobranza, entrega de correspondencia, procesos operativos o de riesgos, proveedores de tecnología, entre otros, Colmena Seguros implementará medidas de seguridad destinadas a proteger la identidad del titular.</p>
                <p><span class="nu-ol">2</span>Para solicitarme directamente, o verificar con los Operadores de Información o las Agencias de Información Comercial nacionales o del exterior, toda la información relacionada con mi comportamiento financiero, comercial y crediticio, y el cumplimiento de mis obligaciones crediticias y la proveniente de terceros países, incluyendo información relacionada con los aportes realizados al Sistema de Seguridad Social. También para consultar la, confirmarla, reportarla, analizarla, actualizar la, conservar la y retirarla.</p>
                <p><span class="nu-ol">3</span>Para transferirla a las autoridades nacionales o internacionales en cumplimiento de las normas referidas a la prevención de actividades ilícitas y al intercambio o suministro de información para efectos tributarios.</p>
                <p><span class="nu-ol">4</span>Para actualizar, conservar, procesar, recopilar y utilizar mi información personal, y/o la documentación entregada en virtud de la relación contractual.</p>
                <p><span class="nu-ol">5</span>Para que me brinden asesoría o asistencia para administrar los productos y servicios de la entidad.</p>
                <p><span class="nu-ol">6</span>Para enviarme a la dirección de correo electrónico y demás datos de contacto que registre, las comunicaciones y reportes de tipo legal y comercial que se requieran.</p>
                <p><span class="nu-ol">7</span> Para compartir mis datos de contacto y de titularidad de productos financieros con las entidades que forman parte del Conglomerado Financiero al que Colmena Seguros pertenece, para ofrecerme sus productos y servicios que son complementarios a los ofrecidos por la Aseguradora. (Las empresas que conforman el Conglomerado Financiero se encuentran publicadas en el aviso de privacidad que podrás consultar en la página web de la Entidad: <a href="https://www.coImenaseguros.com/servicio-cliente/Paginas/Proteccion-de-datos.aspx">https://www.coImenaseguros.com/servicio-cliente/Paginas/Proteccion-de-datos.aspx</a>)</p>
                <!--<h6>FINALIDADES NO ESENCIALES</h6>
                                        <p>Autorizo que mi información personal sea compartida con aliados de la Aseguradora para las siguientes finalidades:</p>
                                        <p><span class="nu-ol">1</span>Para realizar estudios sobre mis gustos, hábitos e intereses. </p>
                                        <p><span class="nu-ol">2</span>Para el ofrecimiento de bienes, productos o servicios financieros complementarios a los adquiridos con la Aseguradora.</p>
                                        <p><span class="nu-ol">3</span>Para el ofrecimiento de bienes, productos y servicios que puedan ser de mi interés, mediante la realización de campañas comerciales o el desarrollo de convenios de marca compartida. </p>
                                        <p>Con la firma de la presente autorización, declaro que me fueron informados los aliados y terceros con quienes se compartirá la información para cada una de las anteriores finalidades, y que se me informó de manera clara que los podré consultar en la página web www.coImenaseguros.com, así como también se me comunicó que dicha información se actualizará cada vez que surjan cambios en los aliados y terceros.</p>-->
                <h6>CON LA FIRMA DE LA PRESENTE AUTORIZACIÓN, DECLARO QUE HE SIDO IINFORMADO ACERCA DE:</h6>
                <p><span class="nu-ol">1</span>Esta autorización permanecerá vigente, hasta tanto sea revocada. Podrá ser revocada en los eventos previstos en la Ley, siempre y cuando no exista ningún tipo de relación con la Aseguradora, o no se encuentre vigente algún producto o servicio derivado de esta autorización.</p>
                <p><span class="nu-ol">2</span>Me asisten los derechos a consultar, actualizar, rectificar y suprimir o revocar el consentimiento, esto último cuando no medie un deber legal o contractual que lo impida.</p>
                <p><span class="nu-ol">3</span>Que los canales dispuestos por Colmena Seguros para ello son los establecidos en el aviso de privacidad que podré consultar en: <a href="https://www.coImenaseguros.com/servicio-cliente/Paginas/Proteccion-de-datos.aspx.">https://www.coImenaseguros.com/servicio-cliente/Paginas/Proteccion-de-datos.aspx.</a></p>
                <p><span class="nu-ol">4</span>Que a través de dichos canales podré revocar el consentimiento otorgado respecto las “Finalidades no esenciales".</p>
                <p><span class="nu-ol">5</span>Que las políticas bajo las cuales se tratarán mis datos personales se encuentran a mi disposición en la portal web de Colmena Seguros en el enlace: <a href="https://www.colmenaseguros.com/imagenescolmenaARP/contenido/proteccion-datos/Politica-de-pr oteccion-de-datos-personales.pdf">https://www.colmenaseguros.com/imagenescolmenaARP/contenido/proteccion-datos/Politica-de-pr oteccion-de-datos-personales.pdf</a> </p>
                <p><span class="nu-ol">6</span>Que podré consultar el listado de los contratistas que la Entidad ha dispuesto para ejercer las labores propias de su objeto social, en la página web la Entidad.</p>
            </div>
            <div class="list-checkbox">
                <h6>FINALIDADES NO ESENCIALES</h6>
                <div class="info-name">
                    <div class="material-inline">
                        <label class="contain-check">
                            <p class="aceppt">Acepto que mis datos se usaran para realizar estudios sobre mis gustos, hábitos e intereses.</p>
                            <input type="checkbox" name="check01" id="check01" data-required="1" value="true"><span class="checkmark" checked="checked"></span>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="info-name">
                    <div class="material-inline">
                        <label class="contain-check">
                            <p class="aceppt">Acepto que mis datos se usaran para el ofrecimiento de bienes, productos o servicios financieros complementarios a los adquiridos con la aseguradora.</p>
                            <input type="checkbox" name="check02" id="check02" data-required="1" value="true"><span class="checkmark" checked="checked"></span>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="info-name">
                    <div class="material-inline">
                        <label class="contain-check">
                            <p class="aceppt">Acepto que mis datos se usaran para el ofrecimiento de bienes, productos o servicios que puedan ser mi interés, mediante la realización de campañas comerciales o el desarrollo de convenios de marca compartida.</p>
                            <input type="checkbox" name="check03" id="check03" data-required="1" value="true"><span class="checkmark" checked="checked"></span>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row-submit">
                <div id="aceptar-mod" class="next">Aceptar</div>
            </div>
            <div class="row-submit">
                <div id="rechazar-mod" class="prev">Rechazar</div>
            </div>
        </div>
    </div>
    <div class="row-submit">
        <input type="submit" name="sendInfoFormOne" id="sendInfoFormOne" value="Adquirir Seguro">
    </div>
</form>

<!-- FORM B -->
<form action="" method="post">
    <div class="steps">
        <div class="step1 active">1</div>
        <div class="step2">2</div>
        <div class="step3">3</div>
    </div>
    <div class="text-step step-1 uno">
        <h1>Paso 1</h1>
        <p>Selecciona el plan que deseas.</p>
    </div>
    <div class="paso1 order-item step-1">
        <div class="radio-group">
            <div class="info-name row-fw">
                <div class="card radio" data-value="planA">
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
                <div class="card radio" data-value="planB">
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
            <input type="text" class="itemval hidden" id="plan-select" name="plan-select" readonly>
        </div>

        <div class="buttons-steps">
            <div class="row-submit">
                <div id="next" name="next" class="next">Continuar</div>
            </div>
            <div class="row-submit hidden">
                <div id="prev" class="prev">Regresar</div>
            </div>
        </div>
    </div>
    <div class="text-step dos step-2 hidden">
        <div class="dos-1">
            <h1>Paso 2</h1>
            <p>¡Estás a un paso de adquirir tu seguro! Completa los datos para continuar.</p>
        </div>
        <div class="dos-2">
            <h1>Validación</h1>
            <p>Te hemos enviado un mensaje de texto SMS con el codigo de verificación a tu número de celular:</p>
            <input style="border:none; display:flex; margin:auto;" disabled class="phone-conf" id="PhoneValidation" name="PhoneValidation" />
            <input style="border:none; display:flex; margin:auto;" disabled class="phone-conf" type="hidden" id="checkCode" name="checkCode" value="0000" />
        </div>
    </div>
    <div class="text-step tres step-3 hidden">
        <div class="text-step uno">
            <h1>Paso 3</h1>
            <p>Resumen de la compra.</p>
        </div>
    </div>
    <div class="paso2 step-2 hidden">
        <div class="info-name">
            <div class="material-input">
                <input type="tel" name="identificationCard" maxlength="10" pattern="[0-9]+" id="identificationCard" placeholder="&nbsp;" onkeypress="return onlyNumbers(event)">
                <label>Cédula:</label>
                <label id="eIdentificationCard" class="hidden" style="font-size:12px;color:#E15132">Ingresar cédula</label>
            </div>
        </div>

        <div class="date-input material-input">
            <input type="date" name="expeditionDate" id="expeditionDate">
            <label>Fecha de expedición de la cédula:</label>
            <label id="eExpeditionDate" class="hidden" style="font-size:12px;color:#E15132">Seleccionar fecha</label>
        </div>
        <div class="info-name">
            <div class="material-input">
                <select style="outline: none;
    font-size: inherit;
    z-index: 2;
    background: transparent;
    border-radius: 5px;
    width: 100%;
    border: 1px solid #328c9f;
    color: #004e89;
    padding-left: 15px;
    font-size: 1.2em;" name="occupation" id="occupation" placeholder="&nbsp;">
                    <option value="" selected="selected">Selecciona una ocupación</option>
                    <option value="82f5deab-316e-4721-bac7-20d8ca4cfc40">Independiente</option>
                    <option value="82f5deab-316e-4721-bac7-20d8ca4cfc40">Empleado</option>
                    <option value="82f5deab-316e-4721-bac7-20d8ca4cfc40">Desempleado</option>
                    <option value="82f5deab-316e-4721-bac7-20d8ca4cfc40">Ama de Casa</option>
                    <option value="82f5deab-316e-4721-bac7-20d8ca4cfc40">Pensionado</option>
                    <option value="82f5deab-316e-4721-bac7-20d8ca4cfc40">Estudiante</option>
                </select>
                <!--  <label>Ocupación:</label> -->
                <label id="eOccupation" class="hidden" style="font-size:12px;color:#E15132">Escoge ocupacion</label>
            </div>
        </div>
        <div class="buttons-steps">
            <div class="row-submit">
                <div id="next2" class="next">Continuar</div>
            </div>
            <div class="row-submit">
                <div id="prev2" class="prev">Regresar</div>
            </div>
        </div>
    </div>

    <div class="paso2-verify hidden">
        <div class="info-name">
            <!-- CAMBIAR POR CODE VERIFY -->
            <div class="mb-6 text-center">
                <div id="otp" class="flex justify-center">
                    <input class="number-sms" pattern="[0-9]{10}" type="text" id="first" maxlength="1" />
                    <input class="number-sms" pattern="[0-9]{10}" type="text" id="second" maxlength="1" />
                    <input class="number-sms" pattern="[0-9]{10}" type="text" id="third" maxlength="1" />
                    <input class="number-sms" pattern="[0-9]{10}" type="text" id="fourth" maxlength="1" />
                </div>
            </div>
            <input type="number" name="reCode" id="reCode" class="hidden" readonly>
            <button class="resend" style="border: none;background-color: transparent;" onclick="resendSms()">¿Reenviar código?</button>
        </div>
        <div class="row-submit">
            <div id="verify" class="next">Verificar</div>
        </div>
    </div>

    <div class="paso3 step-3 hidden">
        <div class="resume">
            <div style="height:0%;" class="item-tittle">
                <input style="line-height: 30px;font-weight: bold;" disabled type="text" name="vPlan" id="vPlan" class="showProperty" value="Plan A" />
            </div>
            <div style="height:0%;font-weight: bold;" class="data-name">Nombres:
                <input type="text" style="width: 80%;" name="vName" id="vName" class="showProperty">
            </div>
            <div style="height:0%;font-weight: bold;" class="data-id">Cédula:
                <input disabled type="number" style="width: 70%;" name="vDocument" id="vDocument" class="showProperty">
            </div>
            <div style="height:0%;font-weight: bold;" class="data-mail">Correo Electrónico:
                <input disabled type="email" style="width: 79%;" name="vEmail" id="vEmail" class="showProperty">
            </div>
            <div style="height:0%;font-weight: bold;" class="data-phone">Celular:
                <input type="number" style="width: 70%;" disabled name="vPhone" id="vPhone" class="showProperty">
            </div>
            <div style="height:0%;font-weight: bold;" class="data-total">Total a pagar:
                <input disabled type="number" name="vPay" id="vPay" class="showProperty" style="text-align:right;font-weight: bold;">
            </div>
        </div>
        <img src="https://tudiarioasegurado.artico.website/wp-content/uploads/2021/08/Group-350.png" alt="formas de pago" data-pagespeed-url-hash="1869400207" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" data-pagespeed-url-hash="1869400207" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
        <div class="info-name">
            <div class="material-inline">
                <label class="contain-check">
                    <p class="aceppt" id="textPolicy2">Acepto los términos, condiciones, declaraciones y autorizaciones de la poliza.
                    </p>
                    <input type="checkbox" name="policy2" id="policy2" data-required="1" required><span class="checkmark" checked="checked"></span>
                    <span class="checkmark" id="spanPolicy2"></span>
                </label>
            </div>
        </div>
        <div class="conclusion">Recibirás un correo con toda la información relacionada con tu poliza, tambien allí
            podrás designar tus beneficiarios. Mientras esto ocurre, los beneficiarios de tu seguro serán los de ley, es
            decir: tu cónyuge o compañero(a) permanente, en la mitad del seguro, y tus herederos en la otra mitad.
        </div>
        <input type="submit" name="btn_pay" id="btn_pay" value="Pagar">
    </div>
</form>

<!-- FORM PAYU -->
<form method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">
    <input name="merchantId" id="merchantId" type="hidden" value="">
    <input name="accountId" id="accountId" type="hidden" value="">
    <input name="description" id="description" type="hidden" value="Pago de seguro Colmena con número de Referencia: ">
    <input name="referenceCode" id="referenceCode" type="hidden" value="">
    <input name="amount" id="amount" type="hidden" value="97500">
    <input name="tax" id="tax" type="hidden" value="0">
    <input name="taxReturnBase" id="taxReturnBase" type="hidden" value="0">
    <input name="currency" id="currency" type="hidden" value="COP">
    <input name="signature" id="signature" type="hidden" value="">
    <input name="test" id="test" type="hidden" value="0">
    <input name="buyerEmail" id="buyerEmail" type="hidden" value="">
    <input name="mobilePhone" id="mobilePhone" type="hidden" value="">
    <input name="buyerDocument" id="buyerDocument" type="hidden" value="">
    <input name="buyerFullName" id="buyerFullName" type="hidden" value="Name">
    <input name="responseUrl" id="responseUrl" type="hidden" value="">
    <input name="confirmationUrl" id="confirmationUrl" type="hidden" value="">
    <input type="submit" class="hidden" name="btn_payu" id="btn_payu" value="Pagar" />
</form>