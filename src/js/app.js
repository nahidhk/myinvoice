let globalData = []; // Global variable to store data

async function displayData(searchInput = "") {
  try {
    const response = await fetch("/src/api/user.php");
    const data = await response.json();
    globalData = data; // Store the fetched data globally

    const dataContainer = document.getElementById("app");
    if (!dataContainer) {
      throw new Error("Element with id 'app' not found.");
    }

    dataContainer.innerHTML = "";

    const filteredData = data.filter((item) =>
      item.username.toLowerCase().includes(searchInput.toLowerCase())
    );

    filteredData.forEach((item) => {
      const itemElement = document.createElement("div");
      itemElement.innerHTML = `<option value="${item.username}"></option>`;
      dataContainer.appendChild(itemElement);
    });
  } catch (error) {
    console.error("data error", error);
  }
}

function autofill() {
  const username = document.getElementById("username").value;
  const item = globalData.find((user) => user.username === username);
  
  if (item) {
    document.getElementById('mb').value=item.phone;
    document.getElementById('ad').value=item.address;
  } else {
    console.log("User not found");
  }
}

function searchData() {
  const searchInput1 = document.querySelector("#search").value;
  displayData(searchInput1);
  window.location.href = "#" + searchInput1;
}

function mydata() {
  document.querySelector("#search").value = "";
  searchData();
}

displayData();
  // Get today's date
  let today = new Date();
    
  // Format the date as YYYY-MM-DD
  let formattedDate = today.toISOString().split('T')[0];
  
  // Set the value of the input field to today's date
  document.getElementById('rdate').value = formattedDate;