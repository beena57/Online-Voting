<!DOCTYPE html>
<html>
<head>
  <title>Selection</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<style>
body{
  background-image: url(annie-spratt-xTaOPMa6wAE-unsplash.jpg);
  background-size: cover;
  background-repeat: no-repeat;
}
form{
  left: 50%;
    top: 50%;
    margin-left: -15%;
    position: absolute;
    margin-top: -15%;
}

fieldset{
  display: inline-block;
  font-size:14px;
  padding:5px;
  width:400px;
  line-height:1.8;
  margin: 0 auto;
}
legend {
    background-color: #000;
    color: #fff;
    padding: 3px 6px;
}
h3, p{
  font-size: 20px;

}

.output {
    font: 1rem 'Fira Sans', sans-serif;
}

input {
    margin: .8rem;
}
button {
  background-color: #000000;
  color: white;
}

</style>
  <body>
  <div class="header">
    <center>
    <h1>VOTING PANEL</h1>
  </center>
  </div>
  <form>
  <fieldset>
    <legend>Vote for your representative</legend>
    <div class="page-header">
            <h2 class="specialHead">Choose Your Candidate.</h2>
            <p class="normalFont">Prove Your Authencity of being correct voter.</p>
          </div>
          <h3 class="normalFont">Selet any one from this:</h3>
    <input type="radio" id="bjp" name="party">
    <label for="kraken">bjp</label><br>
   <input type="radio" id="shivsena" name="party">
    <label for="sasquatch">shivsena</label><br>
    <input type="radio" id="congress" name="party">
    <label for="mothman">congress</label><br>
    <input type="radio" id="aap" name="party">
    <label for="mothman">aap</label><br>
    <button type="submit"name="submit" class="btn btn-primary"><strong><a href="logout.php">Submit</a></strong></button><br>
  </fieldset>
</form>
</body>
</html>
