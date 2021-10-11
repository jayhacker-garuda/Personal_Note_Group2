$(document).ready(function () {
    console.log('This Document Is Ready');

    const homeDiv = document.getElementById('home');
    const profileDiv = document.getElementById('profile');
    const settingsDiv = document.getElementById('settings');

    
    $('#homeBtn').on('click', () => {
        
        // console.log(homeDiv);
        console.log('Home Loaded')
        homeDiv.style.display = 'block'
        profileDiv.style.display = 'none'
        settingsDiv.style.display = 'none'
        
    });
    
    $('#profileBtn').on('click', () => {
        
        // console.log(profileDiv);
        console.log('Profile Loaded');
        profileDiv.style.display = 'block'
        homeDiv.style.display = 'none'
        settingsDiv.style.display = 'none'

    });

    $('#settingsBtn').on('click', () => {

        console.log('Settings Loaded');
        settingsDiv.style.display = 'block'
        profileDiv.style.display = 'none'
        homeDiv.style.display = 'none'

    });

});