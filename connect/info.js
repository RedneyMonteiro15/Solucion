npm install firebase

// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyDCdpUgjMGa8KytGK66xKfvJ4ebl-YGVuM",
  authDomain: "solucion-bafb5.firebaseapp.com",
  projectId: "solucion-bafb5",
  storageBucket: "solucion-bafb5.appspot.com",
  messagingSenderId: "439874243421",
  appId: "1:439874243421:web:b60bc0f4d668c49984f6b4",
  measurementId: "G-87DBGM2LMR"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);




<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDCdpUgjMGa8KytGK66xKfvJ4ebl-YGVuM",
    authDomain: "solucion-bafb5.firebaseapp.com",
    projectId: "solucion-bafb5",
    storageBucket: "solucion-bafb5.appspot.com",
    messagingSenderId: "439874243421",
    appId: "1:439874243421:web:b60bc0f4d668c49984f6b4",
    measurementId: "G-87DBGM2LMR"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>