
const editProfile = document.getElementById('editProfile');
const changeDiv = document.getElementById('change');


function switchDiv() {
    if (changeDiv.style.display == "none") {

        changeDiv.style.display = 'block';
        editProfile.style.display = 'none';

    } else {

        changeDiv.style.display = 'none';
        editProfile.style.display = 'block';

    }
}



