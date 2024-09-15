document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    const inputs = form.querySelectorAll('input');

    inputs.forEach(input => {
        input.addEventListener('input', async (e) => {
            const field = e.target;
            const errorSpan = document.getElementById(`${field.id}Error`);
            
            try {
                await validateField(field);
                errorSpan.textContent = '';
            } catch (error) {
                errorSpan.textContent = error.message;
            }
        });
    });

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        let isValid = true;

        for (let input of inputs) {
            try {
                await validateField(input);
            } catch (error) {
                isValid = false;
                const errorSpan = document.getElementById(`${input.id}Error`);
                errorSpan.textContent = error.message;
            }
        }

        if (isValid) {
            console.log('Formulaire valide, envoi des données...');
            // Ici, vous pouvez ajouter le code pour envoyer les données au serveur
        }
    });
});

async function validateField(field) {
    const value = field.value.trim();
    
    switch (field.id) {
        case 'email':
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                throw new Error('Email invalide');
            }
            break;
        case 'password':
            if (value.length < 8) {
                throw new Error('Le mot de passe doit contenir au moins 8 caractères');
            }
            break;
        case 'nom':
        case 'prenom':
            if (value.length < 2) {
                throw new Error('Ce champ doit contenir au moins 2 caractères');
            }
            break;
        case 'codePostal':
            if (!/^\d{5}$/.test(value)) {
                throw new Error('Code postal invalide (5 chiffres requis)');
            }
            break;
        default:
            if (value.length === 0) {
                throw new Error('Ce champ est requis');
            }
    }
}