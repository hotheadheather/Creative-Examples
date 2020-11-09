function get_foto()
  {
    var randNum;
    var imageNum;

    var randNum = Math.floor(Math.random() * 9) + 1;


    imageNum="img" + randNum + ".jpg";
    

    document.getElementById("foto").src=imageNum;

  }
