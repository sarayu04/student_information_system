function startTime() {
    const today = new Date();
    let h = today.getHours();
    let m = today.getMinutes();
    let s = today.getSeconds();
    let p=today.getDate();

    med = meridian(h);
    h=checkTime(h);
    m = checkTime(m);
    s = checkTime(s);

    document.getElementById('clock').innerHTML =  h + ":" + m + ":" + s+" "+ med;
    
    setTimeout(startTime, 1000);
  }
  
  function checkTime(i) {
    if (i < 10) {i = "0" + i}; 
    return i;
  }

  function meridian(k){
    if(k>12){  k="PM" };
    if(k<12){ k="AM"};
    return k;
  }