document.getElementById("signInBtn").addEventListener("click", function() {
    document.getElementById("message").innerText = "Sign In button clicked!";
});

document.getElementById("loginBtn").addEventListener("click", function() {
    document.getElementById("message").innerText = "Login button clicked!";
});




document.getElementById("otpBtn").addEventListener("click", function() {
    let otp = Math.floor(100000 + Math.random() * 900000); // Generates a 6-digit OTP
    document.getElementById("otpDisplay").innerText = "Your OTP: " + otp;
});





document.getElementById("verifyOtpBtn").addEventListener("click", function() {
    let enteredOtp = document.getElementById("otp").value;
    if (enteredOtp == generatedOtp) {
        alert("OTP Verified Successfully!");
    } else {
        alert("Invalid OTP. Please try again.");
    }
});



// Get the modal
var modal = document.getElementById("termsModal");

// Get the button that opens the modal
var btn = document.getElementById("openModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// Get the buttons
var acceptBtn = document.getElementById("acceptBtn");
var declineBtn = document.getElementById("declineBtn");
var backBtn = document.getElementById("backBtn");

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks on Accept button
acceptBtn.onclick = function() {
    alert("You have accepted the terms and conditions.");
    modal.style.display = "none";
}

// When the user clicks on Decline button
declineBtn.onclick = function() {
    alert("You have declined the terms and conditions.");
    modal.style.display = "none";
}

// When the user clicks on Back button
backBtn.onclick = function() {
    alert("Going back to the previous page.");
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



// Get the back button
var backBtn = document.getElementById("backBtn");

// When the user clicks on Back button
backBtn.onclick = function() {
    alert("Going back to the previous page.");
    // You can add logic to navigate back to the previous page if needed
}

// Handle form submission
document.getElementById("infoForm").onsubmit = function(event) {
    event.preventDefault(); // Prevent the default form submission
    alert("Form submitted successfully!");
    // You can add logic to handle the form data here
}




document.getElementById('backButton').addEventListener('click', function() {
    // Here you can add functionality to go back to the previous page
    alert("Back button clicked!");
});




const API_URL = 'http://localhost:5000';  // Change to your backend URL

// Login Function
async function login() {
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  const response = await fetch(`${API_URL}/login`, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ email, password })
  });

  const data = await response.json();
  if (data.token) {
    alert('Login successful!');
    localStorage.setItem('token', data.token);
  } else {
    alert('Invalid credentials');
  }
}




document.addEventListener("DOMContentLoaded", function () {
  fetchUsers();

  function fetchUsers() {
      fetch("fetch_users.php")
          .then(response => response.json())
          .then(data => {
              const usersList = document.getElementById("users-list");
              usersList.innerHTML = "";
              data.forEach(user => {
                  const div = document.createElement("div");
                  div.classList.add("user");
                  div.innerHTML = `
                      <span>${user.username}</span>
                      <button class="${user.is_following ? 'unfollow-btn' : 'follow-btn'}" 
                          onclick="toggleFollow(${user.user_id}, this)">
                          ${user.is_following ? "Unfollow" : "Follow"}
                      </button>
                  `;
                  usersList.appendChild(div);
              });
          });
  }

  window.toggleFollow = function (userId, btn) {
      const action = btn.classList.contains("follow-btn") ? "follow" : "unfollow";

      fetch("follow.php", {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify({ user_id: userId, action: action })
      })
      .then(response => response.json())
      .then(data => {
          if (data.success) {
              btn.classList.toggle("follow-btn");
              btn.classList.toggle("unfollow-btn");
              btn.textContent = action === "follow" ? "Unfollow" : "Follow";
          }
      });
  };
});



document.addEventListener("DOMContentLoaded", function () {
  fetchUsers();

  function fetchUsers() {
      fetch("fetch_users.php")
          .then(response => response.json())
          .then(data => {
              const usersList = document.getElementById("users-list");
              usersList.innerHTML = "";
              data.forEach(user => {
                  const div = document.createElement("div");
                  div.classList.add("user");
                  div.innerHTML = `
                      <div class="user-info">
                          <img src="${user.profile_picture_url}" alt="Profile Picture">
                          <div>
                              <strong>ID:</strong> ${user.user_id} <br>
                              <strong>Username:</strong> ${user.username} <br>
                              <strong>Full Name:</strong> ${user.full_name} <br>
                              <strong>Bio:</strong> ${user.bio} <br>
                              <strong>Account Type:</strong> ${user.account_type} <br>
                              <strong>Joined:</strong> ${user.created_at}
                          </div>
                      </div>
                      <button class="${user.is_following ? 'unfollow-btn' : 'follow-btn'}" 
                          onclick="toggleFollow(${user.user_id}, this)">
                          ${user.is_following ? "Unfollow" : "Follow"}
                      </button>
                  `;
                  usersList.appendChild(div);
              });
          });
  }

  window.toggleFollow = function (userId, btn) {
      const action = btn.classList.contains("follow-btn") ? "follow" : "unfollow";

      fetch("follow.php", {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify({ user_id: userId, action: action })
      })
      .then(response => response.json())
      .then(data => {
          if (data.success) {
              btn.classList.toggle("follow-btn");
              btn.classList.toggle("unfollow-btn");
              btn.textContent = action === "follow" ? "Unfollow" : "Follow";
          }
      });
  };
});
