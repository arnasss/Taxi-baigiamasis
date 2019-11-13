'use strict'

//const formData = new FormData();
//
//formData.append('name', 'Samane');
//formData.append('amount_ml', '700');
//formData.append('abarot', '80');
//formData.append('image', 'https://www.clos19.com/medias/BELVEDERE-VODKA-SINGLE-ESTATE-RYE-LAKE-BARTEZEK-75CL-NEW-100415-0.jpg?context=bWFzdGVyfGltYWdlc3wxNTM0ODZ8aW1hZ2UvanBlZ3xpbWFnZXMvaDY0L2gwNC85MDAyNjE4NTE5NTgyLmpwZ3w2NDg3YTgyYTdjMDQyZGI5MGE1ZjU0NGVjMDFkOWEzN2QyYzg5NGNhNjY4OWUxZDdhMTNhOWEyMGMyMTE3ZDI3&resize=480px:640px');
//formData.append('action', 'insert');




fetch('api/drinks/get.php')
        .then(response => response.json())
        .then(data => console.log(data));