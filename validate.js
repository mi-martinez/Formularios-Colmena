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

let year = '', month = '', yearPerson = '';
const currentYear = new Date().getFullYear();
let dateBirth = document.querySelector('#dateBirth');

if (dateBirth) {
  dataBirthh.addEventListener('change', (e) => {
    dateBirth = document.querySelector('#dateBirth').value;
    year = parseInt(dateBirth.split('-')[0]) + 18;
    month = parseInt(dateBirth.split('-')[1]) + 02;

    const auxExpeditionDate = `${year}-${month}-03`;
    console.log('auxExpeditionDate:::', auxExpeditionDate)

    console.log(new Date(auxExpeditionDate).toISOString())
    document.querySelector('#expeditionDate').value = new Date(auxExpeditionDate).toISOString().split('T')[0];

    yearPerson = parseInt(dateBirth.split('-')[0]);
  })
}

$("#actionForm1").on("click", async (event) => {
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

  /*  else if ((currentYear - yearPerson) >= 18) {
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
       } */
});

/*
 * Validación con el spam abajo del label para los campos
 * Sacar una clase hidden para formularios
 * No cumplen los requisitos
 * Url param en wordpress
 * SMS verify
 */