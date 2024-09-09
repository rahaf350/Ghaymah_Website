var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
var SpeechGrammarList = SpeechGrammarList || webkitSpeechGrammarList;
var SpeechRecognitionEvent = SpeechRecognitionEvent || webkitSpeechRecognitionEvent;

var phrases = [
  "اسد",
  "بطريق",
  "تين",
  "ثعلب",
  "جزر",
  "حجر",
  "خروف",
  "ديك",
  "ذراع",
  "رمان",
  "زهور",
  "سعيد",
  "شمس",
  "صبار",
  "ضرس",
  "طماطم",
  "ظرف",
  "عنب",
  "غزال",
  "فيل",
  "قمر",
  "كرز",
  "ليمون",
  "مصحف",
  "نمر",
  "هدف",
  "وليد",
  "ياسمين",
];

var phrasePara = document.querySelector(".phrase");
var resultPara = document.querySelector(".result");
var diagnosticPara = document.querySelector(".output");
var testBtn = document.querySelector("button");
function randomPhrase() {
  var number = Math.floor(Math.random() * phrases.length);
  return number;
}

function testSpeech() {
  testBtn.disabled = true;
  testBtn.textContent = "..جاري الاختبار";

  var phrase = phrases[randomPhrase()];
  phrasePara.textContent = phrase;
  phrasePara.style.fontSize = "calc(100px + 1vw)";
  resultPara.textContent = "نطق صحيح ام خاطئ";
  resultPara.style.background = "rgba(0,0,0,0.2)";
  diagnosticPara.textContent = "...";

  var grammar = "#JSGF V1.0; grammar phrase; public <phrase> = " + phrase + ";";
  var recognition = new SpeechRecognition();
  var speechRecognitionList = new SpeechGrammarList();
  speechRecognitionList.addFromString(grammar, 1);
  recognition.grammars = speechRecognitionList;
  recognition.lang = "ar-SA";
  recognition.interimResults = false;
  recognition.maxAlternatives = 1;

  recognition.start();
  recognition.onresult = function (event) {
    var speechResult = event.results[0][0].transcript;
    diagnosticPara.textContent = "-" + speechResult + "-";
    if (speechResult === phrase) {
      resultPara.textContent = "احسنت";
      resultPara.style.fontSize = "calc(30px + 1vw)";
      resultPara.style.border = "1px solid black";

      resultPara.style.background = "lime";
    } else {
      resultPara.textContent = "حاول مرة اخرى";
      resultPara.style.background = "red";
      resultPara.style.fontSize = "calc(30px + 1vw)";
    }

    console.log("Confidence: " + event.results[0][0].confidence);
  };

  recognition.onspeechend = function () {
    recognition.stop();
    testBtn.disabled = false;
    testBtn.textContent = "ابدأ اختبار نطق جديد";
  };

  recognition.onerror = function (event) {
    testBtn.disabled = false;
    diagnosticPara.textContent = "حدث خطأ" + event.error;
  };
}

testBtn.addEventListener("click", testSpeech);
