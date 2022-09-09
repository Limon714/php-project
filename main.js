const toggleDarkMode = document.querySelector('.toggle-darkmode');
const toggleText = document.querySelector('.toggle-text');

let darkMode = localStorage.getItem(".darkmode");

// set 🕶️ mode

const enableDarkMode = () => {
    document.body.classList.add("darkmode");
    toggleText.textContent = "Light";
    localStorage.getItem("darkMode", "enabled");

}
//set 🔅 mode
const disableDarkMode = () => {
  document.body.classList.remove("darkmode");
  toggleText.textContent = "Dark";
  localStorage.getItem("darkMode", null);
};

// Save User 📚 history

if (darkMode === "enabled") {
    enableDarkMode(); 
   
} else {
    disableDarkMode();
}

// Add ➕ event listener

toggleDarkMode.addEventListener("click", () => {
    
    let darkMode = localStorage.getItem(".darkmode");
    
    if (darkMode !== "enabled") {
        enableDarkMode();
    } else {
        disableDarkMode();
    }
})
