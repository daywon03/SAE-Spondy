
function toggleForm(formId) {
    document.querySelectorAll('form').forEach(form => {
        form.classList.remove('active');
    });
    document.getElementById(formId).classList.add('active');
}


const handleQuestionnaire = async (event) => {
    event.preventDefault();

    const age = document.querySelector('input[name="age"]')?.value;
    const region = document.querySelector('select[name="region"]')?.value;
    const situation_logement = document.querySelector('select[name="situation_logement"]')?.value;
    const cdaph = document.querySelector('input[name="cdaph"]:checked')?.value;
    const choix_logement = document.querySelector('input[name="choix_logement"]:checked')?.value;
    const activite_pro = document.querySelector('select[name="activite_pro"]')?.value;
    const besoins_soutien = document.querySelector('select[name="besoins_soutien"]')?.value;
    const qualite_vie = Array.from(document.querySelectorAll('input[name="qualite_vie"]:checked'))
        .map(checkbox => checkbox.value);

    if (!age || !region || !situation_logement || !cdaph || !activite_pro || !besoins_soutien) {
        console.error("Veuillez remplir tous les champs obligatoires.");
        return;
    }

    try {
        const response = await fetch('submit_questionnaire.php', {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                age,
                region,
                situation_logement,
                cdaph,
                choix_logement,
                activite_pro,
                besoins_soutien,
                qualite_vie
            })
        });

        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }

        const result = await response.json();
        console.log("Réponse du serveur:", result);

        const successMessage = document.getElementById('questionnaire-success');
        successMessage.textContent = 'Merci d\'avoir complété le questionnaire !';
        successMessage.style.display = 'block';
    } catch (error) {
        console.error("Erreur lors de l'envoi du formulaire:", error);
    }

};


