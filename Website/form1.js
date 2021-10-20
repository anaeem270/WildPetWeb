
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


  //signOut

  function signOut(){
    auth.signOut();
    alert("SignOut Successfully from System");
    window.location.href = "logIn.html";
  }

  //active user to homepage
  firebase.auth().onAuthStateChanged((user)=>{

    if(user){
      var email = user.email;
      alert("Active user "+email);

    }
  })