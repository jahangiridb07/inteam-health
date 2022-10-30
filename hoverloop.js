




autoHovering({
  totalItem: 6,
  activeColor:"#f00",
  deactiveColor:"grey",
  id:"__item"
})





function autoHovering({totalItem,id : htmlId,activeColor,deactiveColor}){
  let stop = false;
  const activeBox = (active) => document.getElementById(htmlId+ active).style.backgroundColor = activeColor;

  const clear = (holder) => {
    for (let index = 0; index < totalItem; index++) {
      if (holder != index) {
        document.getElementById(htmlId + index).style.backgroundColor = deactiveColor;
      }
    }
  }


  const startLoop = (index = 0) => {
    console.log("loop",index)
    if (stop) return;
    setTimeout(() => {
      if (stop) return;
      activeBox(index);
      clear(index)
      index++;
      if (index > totalItem - 1) index = 0;
      startLoop(index);
    }, 500);
  }

  ((cb) => {
    for (let index = 0; index < totalItem; index++) {
      document.getElementById(`${htmlId}${index}`).addEventListener('mouseover', e => cb(index, "hover", e));
      document.getElementById(`${htmlId}${index}`).addEventListener('mouseout', e => cb(index, "out", e));
    }
  })((index, type) => {
    if (type === "hover") {
      console.log("hover", index);
      stop = true;
      activeBox(index)
      clear(index)
    } else {
      stop = false;
      startLoop(index == totalItem - 1 ? 0 : index + 1);
    }
  })


  startLoop();
}


