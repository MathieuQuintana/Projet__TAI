fetch('get_users.php')

    .then(response => response.json())

    .then(data => {

        console.log(data);

        let usersList = document.getElementById("utilisateurs");

        data.forEach(utilisateurs => {

            let li = document.createElement("li");

            li.textContent = `${utilisateurs.mail} - ${utilisateurs.code}`; //mail code

            usersList.appendChild(li);

        });

    })

    .catch(error => console.error("Erreur:", error));

 