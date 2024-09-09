const draggableElements0 = document.querySelectorAll(".draggable0");
const droppableElements0 = document.querySelectorAll(".droppable0");
const draggableElements = document.querySelectorAll(".draggable");
const droppableElements = document.querySelectorAll(".droppable");
const draggableElements1 = document.querySelectorAll(".draggable1");
const droppableElements1 = document.querySelectorAll(".droppable1");
const draggableElements2 = document.querySelectorAll(".draggable2");
const droppableElements2 = document.querySelectorAll(".droppable2");

//js for first D+D
draggableElements0.forEach((elem0) => {
  elem0.addEventListener("dragstart", dragStart0);
});

droppableElements0.forEach((elem0) => {
  elem0.addEventListener("dragenter", dragEnter0);
  elem0.addEventListener("dragover", dragOver0);
  elem0.addEventListener("dragleave", dragLeave0);
  elem0.addEventListener("drop", drop0);
});

function dragStart0(event0) {
  event0.dataTransfer.setData("text", event0.target.id);
}

function dragEnter0(event0) {
  if (!event0.target.classList.contains("dropped0")) {
    event0.target.classList.add("droppable-hover0");
  }
}

function dragOver0(event0) {
  if (!event0.target.classList.contains("dropped0")) {
    event0.preventDefault();
  }
}

function dragLeave0(event) {
  if (!event.target.classList.contains("dropped0")) {
    event.target.classList.remove("droppable-hover0");
  }
}

function drop0(event0) {
  event0.preventDefault();
  event0.target.classList.remove("droppable-hover0");
  const draggableElementData0 = event0.dataTransfer.getData("text");
  const droppableElementData0 =
    event0.target.getAttribute("data-draggable-id0");
  const isCorrectMatching0 = draggableElementData0 === droppableElementData0;
  if (isCorrectMatching0) {
    const draggableElement0 = document.getElementById(draggableElementData0);
    event0.target.classList.add("dropped0");
    event0.target.style.backgroundColor =
      window.getComputedStyle(draggableElement0).color;
    draggableElement0.classList.add("dragged0");
    draggableElement0.setAttribute("draggable0", "false");
  }
}

//js for Ssecond D+D
draggableElements.forEach((elem) => {
  elem.addEventListener("dragstart", dragStart);
});

droppableElements.forEach((elem) => {
  elem.addEventListener("dragenter", dragEnter);
  elem.addEventListener("dragover", dragOver);
  elem.addEventListener("dragleave", dragLeave);
  elem.addEventListener("drop", drop);
});

function dragStart(event) {
  event.dataTransfer.setData("text", event.target.id);
}

function dragEnter(event) {
  if (!event.target.classList.contains("dropped")) {
    event.target.classList.add("droppable-hover");
  }
}

function dragOver(event) {
  if (!event.target.classList.contains("dropped")) {
    event.preventDefault();
  }
}

function dragLeave(event) {
  if (!event.target.classList.contains("dropped")) {
    event.target.classList.remove("droppable-hover");
  }
}

function drop(event) {
  event.preventDefault();
  event.target.classList.remove("droppable-hover");
  const draggableElementData = event.dataTransfer.getData("text");
  const droppableElementData = event.target.getAttribute("data-draggable-id");
  const isCorrectMatching = draggableElementData === droppableElementData;
  if (isCorrectMatching) {
    const draggableElement = document.getElementById(draggableElementData);
    event.target.classList.add("dropped");
    event.target.style.backgroundColor =
      window.getComputedStyle(draggableElement).color;
    draggableElement.classList.add("dragged");
    draggableElement.setAttribute("draggable", "false");
  }
}

//js for 3rd D+D
draggableElements1.forEach((elem1) => {
  elem1.addEventListener("dragstart", dragStart1);
});

droppableElements1.forEach((elem1) => {
  elem1.addEventListener("dragenter", dragEnter1);
  elem1.addEventListener("dragover", dragOver1);
  elem1.addEventListener("dragleave", dragLeave1);
  elem1.addEventListener("drop", drop1);
});

function dragStart1(event1) {
  event1.dataTransfer.setData("text", event1.target.id);
}

function dragEnter1(event1) {
  if (!event1.target.classList.contains("dropped1")) {
    event1.target.classList.add("droppable-hover1");
  }
}

function dragOver1(event1) {
  if (!event1.target.classList.contains("dropped1")) {
    event1.preventDefault();
  }
}

function dragLeave1(event1) {
  if (!event1.target.classList.contains("dropped1")) {
    event1.target.classList.remove("droppable-hover1");
  }
}

function drop1(event1) {
  event1.preventDefault();
  event1.target.classList.remove("droppable-hover1");
  const draggableElementData1 = event1.dataTransfer.getData("text");
  const droppableElementData1 =
    event1.target.getAttribute("data-draggable-id1");
  const isCorrectMatching1 = draggableElementData1 === droppableElementData1;
  if (isCorrectMatching1) {
    const draggableElement1 = document.getElementById(draggableElementData1);
    event1.target.classList.add("dropped1");
    event1.target.style.backgroundColor =
      window.getComputedStyle(draggableElement1).color;
    draggableElement1.classList.add("dragged1");
    draggableElement1.setAttribute("draggable1", "false");
  }
}

//js for 4th D+D
draggableElements2.forEach((elem2) => {
  elem2.addEventListener("dragstart", dragStart2);
});

droppableElements2.forEach((elem2) => {
  elem2.addEventListener("dragenter", dragEnter2);
  elem2.addEventListener("dragover", dragOver2);
  elem2.addEventListener("dragleave", dragLeave2);
  elem2.addEventListener("drop", drop2);
});

function dragStart2(event2) {
  event2.dataTransfer.setData("text", event2.target.id);
}

function dragEnter2(event2) {
  if (!event2.target.classList.contains("dropped1")) {
    event2.target.classList.add("droppable-hover2");
  }
}

function dragOver2(event2) {
  if (!event2.target.classList.contains("dropped2")) {
    event2.preventDefault();
  }
}

function dragLeave2(event2) {
  if (!event2.target.classList.contains("dropped2")) {
    event2.target.classList.remove("droppable-hover2");
  }
}

function drop2(event2) {
  event2.preventDefault();
  event2.target.classList.remove("droppable-hover2");
  const draggableElementData2 = event2.dataTransfer.getData("text");
  const droppableElementData2 =
    event2.target.getAttribute("data-draggable-id2");
  const isCorrectMatching2 = draggableElementData2 === droppableElementData2;
  if (isCorrectMatching2) {
    const draggableElement2 = document.getElementById(draggableElementData2);
    event2.target.classList.add("dropped2");
    event2.target.style.backgroundColor =
      window.getComputedStyle(draggableElement2).color;
    draggableElement2.classList.add("dragged2");
    draggableElement2.setAttribute("draggable2", "false");
  }
}
