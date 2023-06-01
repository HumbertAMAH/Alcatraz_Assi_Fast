function hello(){
    alert('Hello');
}

const findMyState = () =>{
    alert("Patienter ....");
    //const status = document.getElementById('status');
    const lat_vend = document.getElementById('vendLat');
    const lng_vend = document.getElementById('vendLng');

    const succes = (position) =>{
        console.log(position);
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        lat_vend.setAttribute('value',latitude);
        lng_vend.setAttribute('value',longitude);
        console.log(lat_vend.value + " et " + lng_vend.value);
        //status.textContent = latitude + " et " + longitude;
        alert(lat_vend.value + " et " + lng_vend.value);
    
    }
    const error = () =>{
        alert("Impossible de recuperer votre position");
        //status.textContent ='Unable to retrieve your location';
    };

    navigator.geolocation.getCurrentPosition(succes,error);
}

document.querySelector('.find-state').addEventListener('click', findMyState);