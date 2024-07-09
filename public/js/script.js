function showTab(tabId) {
    // Hide all tabs
    document.querySelectorAll('.tab-content').forEach(tab => {
        tab.style.display = 'none';
    });

    // Show the selected tab
    document.getElementById(tabId).style.display = 'flex';

    // Remove 'active' class from all navigation links
    document.querySelectorAll('nav ul li a').forEach(link => {
        link.classList.remove('active');
    });

    // Add 'active' class to the selected navigation link
    document.querySelector(`nav ul li a[onclick="showTab('${tabId}')"]`).classList.add('active');
}

function showAccountTab(tabId) {
    // Hide all account sections
    document.querySelectorAll('.account-section').forEach(section => {
        section.style.display = 'none';
    });

    // Show the selected account section
    document.getElementById(tabId).style.display = 'block';

    // Remove 'active' class from all side buttons
    document.querySelectorAll('.side-button').forEach(button => {
        button.classList.remove('active');
    });

    // Add 'active' class to the selected side button
    document.querySelector(`.side-button[onclick="showAccountTab('${tabId}')"]`).classList.add('active');
}


function showUserTab(tabName) {
    let i;
    let tabcontent = document.getElementsByClassName("user-tab-content");
    let tablinks = document.getElementsByClassName("user-tab-button");

    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(tabName).style.display = "block";
    event.currentTarget.className += " active";
}

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('clients').style.display = 'none';
    document.getElementById('tableau-utilisateur').style.display = 'block';
});

