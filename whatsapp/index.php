<!DOCTYPE html>
<head>
  <title>Whatsapp's Click to Chat</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="styles.css" rel="stylesheet">
</head>

<body>
  <form onsubmit="buildurl()" method="post" class="form-signin">
    <div class="text-center mb-4">
      <img class="mb-4" src="https://www-cdn.whatsapp.net/img/v4/whatsapp-logo.svg" alt="">
      <h1 class="h3 mb-3 font-weight-normal">WhatsApp's <strong>Click to Chat</strong></h1>
      <small>WhatsApp's <strong>Click to Chat</strong> feature allows you to begin a chat with someone without having their phone number saved in your phone's address book. By clicking "Send Message", a chat with the person automatically opens. Click to Chat works on both your phone and WhatsApp Web.</small>
    </div>

    <hr>

    <small>(Omit any zeroes, brackets or dashes when adding the phone number in international format.)
      <br> e.g. +65 9155-3100 -> 6591553100</small>
    <div class="form-label-group" style="margin-top:5px;">
      <input type="text" pattern="[0-9.]+" id="inputPhone" name="phone" class="form-control" <?php if(isset($_POST['phone'])){ echo 'value="'.$_POST['phone'].'"'; } ?> placeholder="Phone Number" required>
      <label for="inputPhone">Phone Number</label>
    </div>

    <div class="form-label-group">
      <input type="text" id="inputText" name="text" class="form-control" <?php if(isset($_POST['text'])){ echo 'value="'.$_POST['text'].'"'; } ?> placeholder="Message">
      <label for="inputText">Your Message</label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" style="background:#35E45D; border:#35E45D;">Send Message</button>
  </form>
  <script type="text/javascript">
    function buildurl() {
        var inputPhone = document.getElementById("inputPhone");
        var inputText = document.getElementById("inputText");
        window.open("https://api.whatsapp.com/send?phone=" + inputPhone.value + "&text=" + inputText.value);
    }
  </script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
