<!DOCTYPE html>
<html>
<head>
  <title> Facebook Graph API </title>
<style>
.flex-container {
    display: -webkit-flex;
    display: flex;
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
}

.flex-container > * {
    padding: 15px;
    -webkit-flex: 1 100%;
    flex: 1 100%;
}

.article {
    text-align: left;
}

header {background: black;color:white;}
footer {background: #aaa;color:white;}
.nav {background:#eee;}

.nav ul {
    list-style-type: none;
	padding: 0;
}

.nav ul a {
	text-decoration: none;
}

@media all and (min-width: 768px) {
    .nav {text-align:left;-webkit-flex: 1 auto;flex:1 auto;-webkit-order:1;order:1;}
    .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2; height: 600px;}
    footer {-webkit-order:3;order:3;}
}
#method {
  width: 80px;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
  function processRequest() {
    $("#response").val('Processing your Request.....');
    $.ajax({
            url: "api.php",
            data: { method: $('#method').val(), url: $('#url').val(), request: $('#request').val() },
            success: function(result){
                $("#response").val(result);
            }
    });
  }

</script>
</head>
<body>

<div class="flex-container">
<header>
  <h1>Facebook Graph API</h1>
</header>

<nav class="nav">
<ul>
  <li><a href="index.php">Home</a></li>
</ul>
</nav>

<article class="article">
  <h1>FB Graph API</h1>
  <p> Send your Request Here</p>

  <div id='form'>
    <form name='graph' id='graph'>

        Method: <select id='method'>
                    <option value="GET"> GET </option>
                    <option value="POST">POST </option>
                </select>
        URL:
          <textarea id='url' cols='100' rows="1">https://graph.facebook.com/v2.7/me</textarea><br /> <br />

        Request: [JSON]
               <textarea id='request' cols='100' rows="5">
                 {
                  "fields": "id,name",
                  "access_token": "Your_Token"
                }
               </textarea><br /> <br />

        <button id='process' type="button" onclick="processRequest();"> Submit </button> <br /> <br />
        Response:<br /> <br />
               <textarea id='response' cols='120' rows="8" readonly=""> </textarea>

    </form>

  </div>


</article>

<footer>No CopyRight</footer>
</div>

</body>
</html>
