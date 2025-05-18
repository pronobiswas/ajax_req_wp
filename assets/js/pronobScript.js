let ReasonforLeavingTable = document.querySelector("#ReasonforLeavingTable");
let isValidatePhase1 = "false";
let isValidatePhase2 = "false";
let isValidatePhase3 = "false";
let isValidatePhase4 = "false";
let isValidatePhase5 = "false";
let isValidatePhase6 = "false";
let isValidatePhase7 = "false";
let isValidatePhase8 = "false";
let isValidatePhase9 = "false";
// ===header===
let pageOptions = document.getElementById("pageOptions");
pageOptions.addEventListener("click", () => {
  document.getElementById("formPagenetion").classList.toggle("hidden");
});
document.addEventListener("DOMContentLoaded", () => {
  let phaseNavigationItem = document.querySelectorAll(
    "#immigration_form header .heading #pageOptions #formPagenetion ol li"
  );
  phaseNavigationItem.forEach((item) => {
    item.addEventListener("click", function (e) {
      phaseNavigationItem.forEach((item) => {
        item.classList.remove("active_phase_indicator");
      });
      e.currentTarget.classList.add('active_phase_indicator')
    });
  });
});
let pro_form_phase = document.querySelectorAll('.pro_form #cityzenPth_form .pro_form_phase');
// =====phase validation=====
function handle_phase_navigation(phaseId , validationFlag ){
    console.log(validationFlag);
    console.log(phaseId);
    if(validationFlag == "true"){
      pro_form_phase.forEach((phase)=>{
        phase.classList.add('hidden')
      });
      let unlock_phase = document.getElementById(phaseId);
      if(unlock_phase){
          unlock_phase.classList.remove('hidden');
      }else{
        document.getElementById('phase1').classList.remove('hidden')
      }
    }
};

// ===form====
let allSelectOption = document.querySelectorAll("select");

let applicantInfo = {
  full_name: "",
  other_name: "",
  mailing_address: "",
  city: "",
  state: "",
  zip_code: "",
  phone_number: "",
  email_address: "",
  Height: "",
  Weight: "",
  date_of_birth: "",
  place_of_birth: "",
  Country_of_Citizenship: "",
  Marital_Status: "",
  date_of_entry: "",
  how_to_enter: "",
  place_of_entry: "",
  have_you_ever_left_the_US: "no",
  Reason_for_Leaving: "",
  reason2: "",
  isContinuousResidence: "no",
  address1: "",
  from_date1: "",
  to_date1: "",
  address2: "",
  from_date2: "",
  to_date2: "",
  current_education_status: "",
  where_education_received: "",
  left_US: "no",
  why_left_us: "",
  current_annual_income: "",
  current_emloyer_name: "",
  current_emloyer_address: "",
  why_work_auth: "",
  // phase6
  full_name_of_prior_spouse: "",
  date_marrige_began: "",
  date_marrige_ended: "",
  place_marrige_ended: "",
  description_of_why_marrige_ended: "",
  // phase7
  name_of_child: "",
  child_citizenship: "",
  child_current_address: "",
  child_immigration_status: "",
  child_alien_registration_number: "",
  child_birth_date: "",
  child_country_of_birth: "",
  child_average_earnings: "",
  // phase8
  street_and_number: "",
  resided_from: "",
  resided_to: "",
  //phase9
  full_name_of_employer: "",
  full_address_of_employer: "",
  earning_per_week: "",
  type_of_work_preformed: "",
  start_of_employment_last_10_years: "",
  end_of_employment_last_10_years: "",
  // phase10
  father_name: "",
  father_cityzen_of_what_country: "",
  father_relationship_to_me: "",
  father_imigration_status: "",
  father_alien_registration_number: "",
  father_birth_date: "",
  father_birth_country: "",
  mother_cityzen_of_what_country: "",
  mother_relationship_to_me: "",
  mother_imigration_status: "",
  mother_alien_registration_number: "",
  mother_birth_date: "",
  mother_birth_country: "",
};
let applicationInfoWarnning = {
  full_name: "",
  other_name: "",
  mailing_address: "",
  city: "",
  state: "",
  zip_code: "",
  phone_number: "",
  email_address: "",
  Height: "",
  Weight: "",
  date_of_birth: "",
  place_of_birth: "",
  Country_of_Citizenship: "",
  Marital_Status: "",
};
// %%%%%%%phase1%%%%%%%%
// &&&&&&&&&&&collect data&&&&&&&&&&&&&
const phase1 = document.getElementById("phase1");
let phase1input = document.querySelectorAll("#phase1 .pro_input_Row input");
// ----collect phase1 input value----
phase1input.forEach((input) => {
  input.addEventListener("click", () => {
    input.classList.remove("warnInput");
  });
  input.addEventListener("input", (e) => {
    applicantInfo = {
      ...applicantInfo,
      [e.target.name]: e.target.value.trim(),
    };
  });
});
// -----make Warning message-----
allSelectOption[0].addEventListener("input", (e) => {
  applicantInfo = {
    ...applicantInfo,
    [e.target.name]: e.target.value.trim(),
  };
});
// ----validate phase 1-----
function validatePhaseOne() {
  let full_name = document.getElementById("full_name").value;
  let other_name = document.getElementById("other_name").value;
  let mailing_address = document.getElementById("mailing_address").value;
  let city = document.getElementById("city").value;
  let state = document.getElementById("state").value;
  let zip_code = document.getElementById("zip_code").value;
  let phone_number = document.getElementById("phone_number").value;
  let email_address = document.getElementById("email_address").value;
  let height = document.getElementById("height").value;
  let weight = document.getElementById("weight").value;
  let date_of_birth = document.getElementById("date_of_birth").value;
  let place_of_birth = document.getElementById("place_of_birth").value;
  let country_of_citizenship = document.getElementById(
    "country_of_citizenship"
  ).value;
  let marital_status = document.getElementById("marital_status").value;

  phase1input.forEach((input) => {
    // all are required
    if (input.value == "") {
      for (x in applicationInfoWarnning) {
        applicationInfoWarnning[x] = "required";
      }
    }
    if (input.value == "") {
      input.classList.add("warnInput");
    } else {
      input.classList.remove("warnInput");
    }
  });
  // ---check all field are fild--
  if (
    !full_name ||
    !other_name ||
    !mailing_address ||
    !city ||
    !state ||
    !zip_code ||
    !phone_number ||
    !email_address ||
    !height ||
    !weight ||
    !date_of_birth ||
    !place_of_birth ||
    !country_of_citizenship ||
    !marital_status
  ) {
    isValidatePhase1 = "false";
  } else {
    isValidatePhase1 = "true";
  }
  // ----go to next step-----
  if (isValidatePhase1 == "true") {
    phase1.classList.add("hidden");
    document.getElementById("phase2").classList.remove("hidden");
  }
}

function handePhaseOne() {
  validatePhaseOne();
}

// %%%%%%%%%%%END OF PHASE ONE%%%%%%%%%%%%%%
// @@@@@@@@@@ START OF PHASE 2 TWO @@@@@@@@@@@@@@@@@
const phase2 = document.getElementById("phase2");
const phase2Inputs = document.querySelectorAll("#phase2 input");

// ---colllect phase two data---
phase2Inputs.forEach((input) => {
  input.addEventListener("click", (e) => {
    input.classList.remove("warnInput");
  });
  input.addEventListener("input", (e) => {
    applicantInfo = {
      ...applicantInfo,
      [e.target.name]: e.target.value.trim(),
    };
  });
});
// -----collect phase two select data-----
document
  .getElementById("have_you_ever_left_the_US")
  .addEventListener("input", (e) => {
    applicantInfo = {
      ...applicantInfo,
      [e.target.name]: e.target.value.trim(),
    };
    if (document.getElementById("have_you_ever_left_the_US").value == "yes") {
      ReasonforLeavingTable.classList.remove("hidden");
    } else {
      ReasonforLeavingTable.classList.add("hidden");
    }
  });
// -----validate phase two-----
function validatePhaseTwo() {
  phase2Inputs.forEach((input) => {
    // all are required
    if (input.value == "") {
      for (x in applicationInfoWarnning) {
        applicationInfoWarnning[x] = "required";
      }
    }
    if (input.value == "") {
      input.classList.add("warnInput");
    } else {
      input.classList.remove("warnInput");
    }
  });
  let date_of_entry = document.getElementById("date_of_entry").value;
  let how_to_enter = document.getElementById("how_to_enter").value;
  let place_of_entry = document.getElementById("place_of_entry").value;
  let have_you_ever_left_the_US = document.getElementById(
    "have_you_ever_left_the_US"
  ).value;
  // ---check all field are fild--
  if (
    !date_of_entry ||
    !how_to_enter ||
    !place_of_entry ||
    !have_you_ever_left_the_US
  ) {
    isValidatePhase2 = "false";
  } else {
    isValidatePhase2 = "true";
  }

  // ----go to next step-----
  if (isValidatePhase2 == "true") {
    phase2.classList.add("hidden");
    document.getElementById("phase3").classList.remove("hidden");
  }
}
function handlePhase2btn() {
  validatePhaseTwo();
}
// @@@@@@@@@@ END OF PHASE 2 TWO @@@@@@@@@@@@@@@@@
// %%%%%%%%%% phase three 3 start here %%%%%%%%%%%
const isContinuousResidence = document.querySelectorAll(
  '#phase3 input[name="isContinuousResidence"]'
);
const left_US = document.querySelectorAll('#phase3 input[name="left_US"]');
const phase3Input = document.querySelectorAll("#phase3 input");
const phase3select = document.querySelectorAll("#phase3 select");
// ---collect data form phase3 select----
isContinuousResidence.forEach((radio) => {
  radio.addEventListener("click", (e) => {
    applicantInfo = {
      ...applicantInfo,
      [e.target.name]: e.target.value.trim(),
    };
    if (applicantInfo.isContinuousResidence == "yes") {
      document.getElementById("residences").classList.remove("hidden");
    } else {
      document.getElementById("residences").classList.add("hidden");
    }
  });
});
// ---collect data form phase3 input----
phase3Input.forEach((input) => {
  input.addEventListener("click", (e) => {
    input.classList.remove("warnInput");
    applicantInfo = {
      ...applicantInfo,
      [e.target.name]: e.target.value.trim(),
    };
  });
  input.addEventListener("input", (e) => {
    applicantInfo = {
      ...applicantInfo,
      [e.target.name]: e.target.value.trim(),
    };
  });
});
// ----collect data from select----
phase3select.forEach((select) => {
  select.addEventListener("click", (e) => {
    applicantInfo = {
      ...applicantInfo,
      [e.target.name]: e.target.value.trim(),
    };
  });
});
// ---collect data from left_US---
left_US.forEach((radio) => {
  radio.addEventListener("click", (e) => {
    applicantInfo = {
      ...applicantInfo,
      [e.target.name]: e.target.value.trim(),
    };
    if (e.target.value == "yes") {
      document.getElementById("explainLeftReason").classList.remove("hidden");
    } else {
      document.getElementById("explainLeftReason").classList.add("hidden");
    }
  });
});
// ---validate phase3 three----
function validatePhase3() {
  phase3Input.forEach((input) => {
    if (input.value == "") {
      input.classList.add("warnInput");
    } else {
      input.classList.remove("warnInput");
      isValidatePhase3 = "true";
    }
  });
  phase3select.forEach((select) => {
    if (select.value.trim() === "") {
      select.classList.add("warnInput");
    }
  });
}
// -----handle phase3 button--------
function handlePhase3btn() {
  validatePhase3();
  document.getElementById("phase3").classList.add("hidden");
  document.getElementById("phase4").classList.remove("hidden");
}
// %%%%%%%%%% phase three 3 end here %%%%%%%%%%%
// ########### PHASE4 FOUR START HERE ############
const phase4Input = document.querySelectorAll("#phase4 input");
// --collect data from phase four input---
phase4Input.forEach((input) => {
  input.addEventListener("click", (e) => {
    input.classList.remove("warnInput");
  });
  input.addEventListener("input", (e) => {
    applicantInfo = {
      ...applicantInfo,
      [e.target.name]: e.target.value.trim(),
    };
  });
});
// --collect data from phase four textarea---
document.querySelector("#phase4 textarea").addEventListener("input", (e) => {
  applicantInfo = {
    ...applicantInfo,
    [e.target.name]: e.target.value.trim(),
  };
  document.querySelector("#phase4 textarea").classList.remove("warnInput");
});
// ----validate phase4 four-------
function validatePhase4() {
  // ---check empty fild and mark it---
  phase4Input.forEach((input) => {
    if (input.value == "") {
      input.classList.add("warnInput");
    } else {
      input.classList.remove("warnInput");
    }
  });
  if (document.querySelector("#phase4 textarea").value.trim() == "") {
    document.querySelector("#phase4 textarea").classList.add("warnInput");
  } else {
    document.querySelector("#phase4 textarea").classList.remove("warnInput");
  }
  // ----check isEligable for next phase-----
  let current_annual_income = document.getElementById(
    "current_annual_income"
  ).value;
  let current_emloyer_name = document.getElementById(
    "current_emloyer_name"
  ).value;
  let current_emloyer_address = document.getElementById(
    "current_emloyer_address"
  ).value;
  let why_work_auth = document.getElementById("why_work_auth").value;
  if (
    !current_annual_income ||
    !current_emloyer_name ||
    !current_emloyer_address ||
    !why_work_auth
  ) {
    isValidatePhase4 = "false";
  } else {
    isValidatePhase4 = "true";
  }
}
// ----handle phase four button--------
function handlePhaseFourBtn() {
  validatePhase4();
  if (isValidatePhase4 == "true") {
    document.getElementById("phase4").classList.add("hidden");
    document.getElementById("phase5").classList.remove("hidden");
  }
}
// ###########phase four end here############
// %%%%%%%%%%%%%%phase five start here%%%%%%%%%%%%%%
const phase5 = document.getElementById("phase5");
const phase5Input = phase5.querySelectorAll("textarea , input");
// ---phase5 all input event---
phase5Input.forEach((input) => {
  input.addEventListener("click", (e) => {
    input.classList.remove("warnInput");
  });
});
// ---collect phase5 input data---
phase5Input.forEach((input) => {
  input.addEventListener("input", (e) => {
    applicantInfo = {
      ...applicantInfo,
      [e.target.name]: e.target.value.trim(),
    };
  });
});
// ----validate phase5 input----
function validatePhase5() {
  phase5Input.forEach((input) => {
    if (input.value == "") {
      input.classList.add("warnInput");
    } else {
      input.classList.remove("warnInput");
    }
  });
  // ----check isEligable for next phase-----
  let spouse_name = document.getElementById("spouse_name").value;
  let cityzenship_of_spouse = document.getElementById(
    "cityzenship_of_spouse"
  ).value;
  let current_address_of_spouse = document.getElementById(
    "current_address_of_spouse"
  ).value;
  let spouseImmigration = document.getElementById("spouseImmigration").value;
  let spouse_aline_registration_number = document.getElementById(
    "spouse_aline_registration_number"
  ).value;
  let spouse_birth_date = document.getElementById("spouse_birth_date").value;
  let spouse_country_of_birth = document.getElementById(
    "spouse_country_of_birth"
  ).value;
  let spouse_earn_per_week = document.getElementById(
    "spouse_earn_per_week"
  ).value;
  let spouse_social_security_number = document.getElementById(
    "spouse_social_security_number"
  ).value;
  let date_of_marriage = document.getElementById("date_of_marriage").value;
  let place_of_marriage = document.getElementById("place_of_marriage").value;
  let spouse_maiden_name = document.getElementById("spouse_maiden_name").value;
  let place_spouse_first_entered_us = document.getElementById(
    "place_spouse_first_entered_us"
  ).value;
  let date_spouse_first_entered_us = document.getElementById(
    "date_spouse_first_entered_us"
  ).value;
  let date_spouse_become_us_citizen = document.getElementById(
    "date_spouse_become_us_citizen"
  ).value;
  let full_name_of_spouse_employer = document.getElementById(
    "full_name_of_spouse_employer"
  ).value;
  let full_address_of_spouse_employer = document.getElementById(
    "full_address_of_spouse_employer"
  ).value;
  let earning_per_week_of_spouse = document.getElementById(
    "earning_per_week_of_spouse"
  ).value;
  let start_of_employment = document.getElementById(
    "start_of_employment"
  ).value;
  let end_of_employment = document.getElementById("end_of_employment").value;
  if (
    !spouse_name ||
    !cityzenship_of_spouse ||
    !current_address_of_spouse ||
    !spouseImmigration ||
    !spouse_aline_registration_number ||
    !spouse_birth_date ||
    !spouse_country_of_birth ||
    !spouse_earn_per_week ||
    !spouse_social_security_number ||
    !date_of_marriage ||
    !place_of_marriage ||
    !spouse_maiden_name ||
    !place_spouse_first_entered_us ||
    !date_spouse_first_entered_us ||
    !date_spouse_become_us_citizen ||
    !full_name_of_spouse_employer ||
    !full_address_of_spouse_employer ||
    !earning_per_week_of_spouse ||
    !type_of_work_preformed_by_spouse ||
    !start_of_employment ||
    !end_of_employment
  ) {
    isValidatePhase5 = "false";
    console.log("validate fail");
  } else {
    isValidatePhase5 = "true";
    console.log("validate");
  }
}

function handlePhaseFiveBtn() {
  validatePhase5();
  if (isValidatePhase5 == "true") {
    document.getElementById("phase5").classList.add("hidden");
    document.getElementById("phase6").classList.remove("hidden");
  }
}
// %%%%%%%%%%%%%%phase five end here%%%%%%%%%%%%%%
// $$$$$$$$$ PHASE 6 START HERE $$$$$$$$$$$$
const phase6 = document.getElementById("phase6");
const phase6inputs = document.querySelectorAll("#phase6 input");
phase6inputs.forEach((input) => {
  input.addEventListener("click", () => {
    input.classList.remove("warnInput");
  });
  input.addEventListener("input", (e) => {
    applicantInfo = {
      ...applicantInfo,
      [e.target.name]: e.target.value.trim(),
    };
  });
});
function handleAddmore1() {
  document.querySelector("#phase6 .part2").classList.toggle("hidden");
}
// ======== validate phase6 ==========
function validatePhase6() {
  phase6inputs.forEach((input) => {
    if (input.value == "") {
      input.classList.add("warnInput");
    } else {
      input.classList.remove("warnInput");
    }
  });
  // ---validate phase6---
  let full_name_of_prior_spouse = document.getElementById(
    "full_name_of_prior_spouse"
  ).value;
  let date_prior_marrige_began = document.getElementById(
    "date_prior_marrige_began"
  ).value;
  let date_prior_marrige_ended = document.getElementById(
    "date_prior_marrige_ended"
  ).value;
  let place_prior_marrige_ended = document.getElementById(
    "place_prior_marrige_ended"
  ).value;
  let description_of_why_marrige_ended = document.getElementById(
    "description_of_why_marrige_ended"
  ).value;
  if (
    !description_of_why_marrige_ended ||
    !place_prior_marrige_ended ||
    !date_prior_marrige_ended ||
    !date_prior_marrige_began ||
    !full_name_of_prior_spouse
  ) {
    isValidatePhase6 = "false";
  } else {
    isValidatePhase6 = "true";
  }
}
// -----handle phase6 button ------
function handlePhase6next() {
  validatePhase6();
  if (isValidatePhase6 == "true") {
    phase6.classList.add("hidden");
    document.getElementById("phase7").classList.remove("hidden");
  }
}
// $$$$$$$$$ PHASE 6 end HERE $$$$$$$$$$$$
// %%%%%%%%%%%% PHASE7 START HERE %%%%%%%%%%%%%
const phase7 = document.getElementById("phase7");
const phase7inputs = document.querySelectorAll("#phase7 input");
phase7inputs.forEach((input) => {
  input.addEventListener("click", () => {
    input.classList.remove("warnInput");
  });
  input.addEventListener("input", (e) => {
    applicantInfo = {
      ...applicantInfo,
      [e.target.name]: e.target.value.trim(),
    };
  });
});
// ======== validate phase7 ==========
function validatePhase7() {
  phase7inputs.forEach((input) => {
    if (input.value == "") {
      input.classList.add("warnInput");
    } else {
      input.classList.remove("warnInput");
    }
  });
  let name_of_child = document.getElementById("name_of_child").value;
  let child_citizenship = document.getElementById("child_citizenship").value;
  let child_current_address = document.getElementById(
    "child_current_address"
  ).value;
  let child_immigration_status = document.getElementById(
    "child_immigration_status"
  ).value;
  let child_alien_registration_number = document.getElementById(
    "child_alien_registration_number"
  ).value;
  let child_birth_date = document.getElementById("child_birth_date").value;
  let child_country_of_birth = document.getElementById(
    "child_country_of_birth"
  ).value;
  let child_average_earnings = document.getElementById(
    "child_average_earnings"
  ).value;

  if (
    !name_of_child ||
    !child_citizenship ||
    !child_current_address ||
    !child_immigration_status ||
    !child_alien_registration_number ||
    !child_birth_date ||
    !child_country_of_birth ||
    !child_average_earnings
  ) {
    isValidatePhase7 = "false";
  } else {
    isValidatePhase7 = "true";
  }
}
// ----handlephase 7 button------
function handlePhase7button() {
  validatePhase7();
  if (isValidatePhase7 == "true") {
    document.getElementById("phase7").classList.add("hidden");
    document.getElementById("phase8").classList.remove("hidden");
  }
}
// %%%%%%%%%%%% PHASE7 END HERE %%%%%%%%%%%%%
// ############ PHASE8 START HERE #############
const phase8 = document.getElementById("phase8");
const phase8inputs = document.querySelectorAll("#phase8 input");
phase8inputs.forEach((input) => {
  input.addEventListener("click", () => {
    input.classList.remove("warnInput");
  });
  input.addEventListener("input", (e) => {
    applicantInfo = {
      ...applicantInfo,
      [e.target.name]: e.target.value.trim(),
    };
  });
});
// ======== validate phase8 ==========
function validatePhase8() {
  phase8inputs.forEach((input) => {
    if (input.value == "") {
      input.classList.add("warnInput");
    } else {
      input.classList.remove("warnInput");
    }
  });
  let street_and_number = document.getElementById("street_and_number").value;
  let resided_from = document.getElementById("resided_from").value;
  let resided_to = document.getElementById("resided_to").value;
  if (!street_and_number || !resided_from || !resided_to) {
    isValidatePhase8 = "false";
  } else {
    isValidatePhase8 = "true";
  }
}
// ------handle phase8 next button----
function handlePhase8Button() {
  validatePhase8();
  if (isValidatePhase8 == "true") {
    document.getElementById("phase8").classList.add("hidden");
    document.getElementById("phase9").classList.remove("hidden");
  }
} 
// ############ PHASE8 END HERE ############
// $$$$$$$$$$$ PHASE9 START HERE $$$$$$$$$$$$$$
const phase9 = document.getElementById("phase9");
const phase9inputs = document.querySelectorAll("#phase9 input");

phase9inputs.forEach((input) => {
  input.addEventListener("click", () => {
    input.classList.remove("warnInput");
  });
  input.addEventListener("input", (e) => {
    applicantInfo = {
      ...applicantInfo,
      [e.target.name]: e.target.value.trim(),
    };
  });
});
function validatePhase9() {
  phase9inputs.forEach((input) => {
    if (input.value == "") {
      input.classList.add("warnInput");
    } else {
      input.classList.remove("warnInput");
    }
  });
  let full_name_of_employer = document.getElementById(
    "full_name_of_employer"
  ).value;
  let full_address_of_employer = document.getElementById(
    "full_address_of_employer"
  ).value;
  let earning_per_week = document.getElementById("earning_per_week").value;
  let type_of_work_preformed = document.getElementById(
    "type_of_work_preformed"
  ).value;
  let start_of_employment_last_10_years = document.getElementById(
    "start_of_employment_last_10_years"
  ).value;
  let end_of_employment_last_10_years = document.getElementById(
    "end_of_employment_last_10_years"
  ).value;

  if (
    !full_name_of_employer ||
    !full_address_of_employer ||
    !earning_per_week ||
    !type_of_work_preformed ||
    !start_of_employment_last_10_years ||
    !end_of_employment_last_10_years
  ) {
    isValidatePhase9 = "false";
  } else {
    isValidatePhase9 = "true";
  }
}
// -------handle phase9 button ------
function handlePhase9Button() {
  validatePhase9();
  if (isValidatePhase9 == "true") {
    document.getElementById("phase9").classList.add("hidden");
    document.getElementById("phase10").classList.remove("hidden");
  } else {
    console.log("kaj korar kotha na");
  }
}
// $$$$$$$$$$$ PHASE9 end HERE $$$$$$$$$$$$$$
// =========phase 10 start here =============
let isValidatePhase10 = "false";
const phase10 = document.getElementById("phase10");
const phase10inputs = document.querySelectorAll("#phase10 input");
phase10inputs.forEach((input) => {
  input.addEventListener("click", () => {
    input.classList.remove("warnInput");
  });
  input.addEventListener("input", (e) => {
    applicantInfo = {
      ...applicantInfo,
      [e.target.name]: e.target.value.trim(),
    };
  });
});
// -----validate phase10--------
function validatePhase10() {
  phase10inputs.forEach((input) => {
    if (input.value == "") {
      input.classList.add("warnInput");
    } else {
      input.classList.remove("warnInput");
    }
  });
  let father_name = document.getElementById("father_name").value;
  let father_cityzen_of_what_country = document.getElementById(
    "father_cityzen_of_what_country"
  ).value;
  let father_relationship_to_me = document.getElementById(
    "father_relationship_to_me"
  ).value;
  let father_imigration_status = document.getElementById(
    "father_imigration_status"
  ).value;
  let father_alien_registration_number = document.getElementById(
    "father_alien_registration_number"
  ).value;
  let father_birth_date = document.getElementById("father_birth_date").value;
  let father_birth_country = document.getElementById(
    "father_birth_country"
  ).value;

  let mother_name = document.getElementById("mother_name").value;
  let mother_cityzen_of_what_country = document.getElementById(
    "mother_cityzen_of_what_country"
  ).value;
  let mother_relationship_to_me = document.getElementById(
    "mother_relationship_to_me"
  ).value;
  let mother_alien_registration_number = document.getElementById(
    "mother_alien_registration_number"
  ).value;
  let mother_birth_date = document.getElementById("mother_birth_date").value;
  let mother_birth_country = document.getElementById(
    "mother_birth_country"
  ).value;

  let grandfather_name = document.getElementById("grandfather_name").value;
  let grandfather_cityzen_of_what_country = document.getElementById(
    "grandfather_cityzen_of_what_country"
  ).value;
  let grandfather_relationship_to_me = document.getElementById(
    "grandfather_relationship_to_me"
  ).value;
  let grandfather_imigration_status = document.getElementById(
    "grandfather_imigration_status"
  ).value;
  let grandfather_alien_registration_number = document.getElementById(
    "grandfather_alien_registration_number"
  ).value;
  let grandfather_birth_date = document.getElementById(
    "grandfather_birth_date"
  ).value;
  let grandfather_birth_country = document.getElementById(
    "grandfather_birth_country"
  ).value;

  let grandmother_name = document.getElementById("grandmother_name").value;
  let grandmother_cityzen_of_what_country = document.getElementById(
    "grandmother_cityzen_of_what_country"
  ).value;
  let grandmother_relationship_to_me = document.getElementById(
    "grandmother_relationship_to_me"
  ).value;
  let grandmother_imigration_status = document.getElementById(
    "grandmother_imigration_status"
  ).value;
  let grandmother_alien_registration_number = document.getElementById(
    "grandmother_alien_registration_number"
  ).value;
  let grandmother_birth_date = document.getElementById(
    "grandmother_birth_date"
  ).value;
  let grandmother_birth_country = document.getElementById(
    "grandmother_birth_country"
  ).value;

  let grandfather_name_mother_side = document.getElementById(
    "grandfather_name_mother_side"
  ).value;
  let grandfather_cityzen_of_what_country_mother_side = document.getElementById(
    "grandfather_cityzen_of_what_country_mother_side"
  ).value;
  let grandfather_relationship_to_me_mother_side = document.getElementById(
    "grandfather_relationship_to_me_mother_side"
  ).value;
  let grandfather_imigration_status_mother_side = document.getElementById(
    "grandfather_imigration_status_mother_side"
  ).value;
  let grandfather_alien_registration_number_mother_side =
    document.getElementById(
      "grandfather_alien_registration_number_mother_side"
    ).value;
  let grandfather_birth_country_mother_side = document.getElementById(
    "grandfather_birth_country_mother_side"
  ).value;
  let grandmother_name_mother_side = document.getElementById(
    "grandmother_name_mother_side"
  ).value;
  let grandmother_cityzen_of_what_country_mother_side = document.getElementById(
    "grandmother_cityzen_of_what_country_mother_side"
  ).value;
  let grandmother_relationship_to_me_mother_side = document.getElementById(
    "grandmother_relationship_to_me_mother_side"
  ).value;
  let grandmother_imigration_status_mother_side = document.getElementById(
    "grandmother_imigration_status_mother_side"
  ).value;
  let grandmother_alien_registration_number_mother_side =
    document.getElementById(
      "grandmother_alien_registration_number_mother_side"
    ).value;
  let grandmother_birth_date_mother_side = document.getElementById(
    "grandmother_birth_date_mother_side"
  ).value;
  let grandmother_birth_country_mother_side = document.getElementById(
    "grandmother_birth_country_mother_side"
  ).value;

  let brother_name = document.getElementById("brother_name").value;
  let brother_cityzen_of_what_country = document.getElementById(
    "brother_cityzen_of_what_country"
  ).value;
  let brother_relationship_to_me = document.getElementById(
    "brother_relationship_to_me"
  ).value;
  let brother_imigration_status = document.getElementById(
    "brother_imigration_status"
  ).value;
  let brother_birth_date = document.getElementById("brother_birth_date").value;
  let brother_birth_country = document.getElementById(
    "brother_birth_country"
  ).value;
}
// $$$$$$$$$ handle hidden Toggole $$$$$$$$$$
function handleHiddenToogle(item) {
  item.classList.toggle("hidden");
}
// @@@@@@@@@@@@@@ handle previous button @@@@@@@@@@@@@
function handlePreviousBtn(previousSection, currentSection) {
  previousSection.classList.remove("hidden");
  currentSection.classList.add("hidden");
}
// &&&&&&&&&&&&&&&& Handle Submit &&&&&&&&&&&&&&&
let allsubmitvalue = {};
let allInput = document.querySelectorAll(
  "#immigration_form .pro_container input"
);
let allselect = document.querySelectorAll(
  "#immigration_form .pro_container select"
);
let allradio = document.querySelectorAll(
  "#immigration_form .pro_container radio"
);
let allInputValue = {};
allInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    allInputValue = {
      ...allInputValue,
      [e.target.name]: e.target.value.trim(),
    };
  });
});
allselect.forEach((select) => {
  select.addEventListener("change", (e) => {
    allInputValue = {
      ...allInputValue,
      [e.target.name]: e.target.value.trim(),
    };
  });
});
allradio.forEach((input) => {
  select.addEventListener("input", (e) => {
    allInputValue = {
      ...allInputValue,
      [e.target.name]: e.target.value.trim(),
    };
  });
});
function handleSubmit() {
  localStorage.setItem("formData", JSON.stringify(allInputValue));
  const formatted = Object.entries(allInputValue)
    .map(([key, value]) => `${key}: ${value}`)
    .join("<br>");

  document.getElementById("show_form_data").innerHTML = formatted;
}

// =========handle save button========
function handleSaveBtn() {
  console.log("handle save button");
  localStorage.setItem("savedData", JSON.stringify(applicantInfo));
}
// ====auto input all filed data=====
window.addEventListener("DOMContentLoaded", () => {
  let savedData = localStorage.getItem("savedData");
  if (savedData) {
    let parsedData = JSON.parse(savedData);
    let form = document.querySelector(".pro_form");
    for (let [key, value] of Object.entries(parsedData)) {
      const input = form.querySelector(`[name="${key}"]`);
      if (input) {
        input.value = value;
      }
    }
  }
});

// ======handle pdf file========
// document.getElementById("downloadPDF").addEventListener("click", async () => {
//   const { jsPDF } = window.jspdf;
//   const doc = new jsPDF();
//   const data = JSON.parse(localStorage.getItem("formData"));
//   if (!data) {
//     alert("No form data found in localStorage.");
//     return;
//   }
//   const margin = 10;
//   const lineHeight = 10;
//   const pageHeight = doc.internal.pageSize.height;
//   let y = margin;
//   const lines = Object.entries(data).map(([key, value]) => `${key}: ${value}`);
//   lines.forEach((line) => {
//     if (y + lineHeight > pageHeight - margin) {
//       doc.addPage();
//       y = margin;
//     }
//     doc.text(line, margin, y);
//     y += lineHeight;
//   });

//   doc.save("form-data.pdf");
//   console.log(doc);
// });
document.getElementById("downloadPDF").addEventListener("click", async () => {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();
    const data = JSON.parse(localStorage.getItem("formData"));
    if (!data) {
      alert("No form data found in localStorage.");
      return;
    }
    const margin = 10;
    const lineHeight = 1;
    const pageHeight = doc.internal.pageSize.height;
    let y = margin;
    Object.entries(data).forEach(([key, value]) => {
      if (y + lineHeight > pageHeight - margin) {
        doc.addPage();
        y = margin;
      }
      doc.setFont("helvetica", "bold");
      const keyText = `${key}:`;
      doc.text(keyText, margin, y);
      const keyWidth = doc.getTextWidth(keyText);
      doc.setFont("helvetica", "normal");
      doc.text(`${value}`, margin + keyWidth + 5, y);
      y += lineHeight;
    });
    doc.save("form-data.pdf");
  });
  
  
// ======handle pdf file========

// &&&&&&&&&&&&&&&& Handle Submit &&&&&&&&&&&&&&&
// &&&&&&&&&&&&&&&& Handle Submit &&&&&&&&&&&&&&&
// &&&&&&&&&&&&&&&& Handle Submit &&&&&&&&&&&&&&&

// jQuery(document).ready(function($) {

//     // $('#nextBtn1').on('click', function(e) {
//     //     const url = "<?php echo admin_url('admin-ajax.php')?>";
//     //     alert(url)

//     //     // var form = $(this);
//     //     // var formData = form.serialize();
//     //     const formData = {
//     //         action: 'submit_immigration_form',
//     //         full_name: document.getElementById("full_name").value,
//     //         other_name: document.getElementById("other_name").value,
//     //         mailing_address: document.getElementById("mailing_address").value,
//     //         city: document.getElementById("city").value,
//     //       };

//     //     $.ajax({
//     //         type: 'POST',
//     //         url: "../../functions.php",
//     //         data: formData,
//     //         success: function(response) {
//     //             $('#form-message').html('<p style="color: green;">' + response.data.message + '</p>');
//     //             console.log(response);

//     //             form[0].reset();
//     //         },
//     //         error: function(xhr) {
//     //             $('#form-message').html('<p style="color: red;">' + xhr.responseJSON.data.message + '</p>');
//     //             console.log(xhr);

//     //         }
//     //     });
//     // });
//     $('#nextBtn1').on('click', function(e) {
//         e.preventDefault();

//         const formData = {
//             action: 'submit_immigration_form',
//             full_name: $('#full_name').val(),
//             other_name: $('#other_name').val(),
//             mailing_address: $('#mailing_address').val(),
//             city: $('#city').val(),
//         };

//         $.ajax({
//             type: 'POST',
//             url: immigration_ajax.ajax_url,
//             data: formData,
//             success: function(response) {
//                 if (response.success) {
//                     $('#form-message').html('<p style="color: green;">' + response.data.message + '</p>');
//                     $('#yourFormID')[0].reset(); // Replace with actual form ID
//                 } else {
//                     $('#form-message').html('<p style="color: red;">' + response.data.message + '</p>');
//                 }
//                 console.log(response);
//             },
//             error: function(xhr) {
//                 $('#form-message').html('<p style="color: red;">An unexpected error occurred.</p>');
//                 console.log(xhr);
//             }
//         });
//     });
// });
