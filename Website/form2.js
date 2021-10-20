
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyDpc5RCOi8CgDdOTainSQyvq_u9dnsP0q0",
    authDomain: "thewildvetapp.firebaseapp.com",
    databaseURL: "https://thewildvetapp-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "thewildvetapp",
    storageBucket: "thewildvetapp.appspot.com",
    messagingSenderId: "491566586632",
    appId: "1:491566586632:web:07ec2b38067083297eaabd",
    measurementId: "G-EQV4MYTL78"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  const auth =  firebase.auth();

  //signup function
  function signUp(){
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    Name = document.getElementById('name').value;
    Dateofbirth = document.getElementById('dateofbirth').value;
    Address = document.getElementById('address').value;
    const promise = auth.createUserWithEmailAndPassword(email.value,password.value);
    //
    promise.catch(e=>alert(e.message));
    alert("SignUp Successfully");
  }

  //signIN function
  function  signIn(){
    var email = document.getElementById("email");
    var password  = document.getElementById("password");
    const promise = auth.signInWithEmailAndPassword(email.value,password.value);
    promise.catch(e=>alert(e.message));
    
  }

  //active user to homepage
  firebase.auth().onAuthStateChanged((user)=>{
    if(user){
        window.location.href = "pets.html";
    }
  })
