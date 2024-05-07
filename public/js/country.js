// user country code for selected option
var user_country_code = "IN";

(() => {
    // script https://www.html-code-generator.com/html/drop-down/state-name

    // Get the country name and state name from the imported script.
    const country_array = country_and_states.country;
    const states_array = country_and_states.states;

    const id_state_option = document.getElementById("state");
    const id_country_option = document.getElementById("country");

    const createCountryNamesDropdown = () => {
        let option = '';
        option += '<option value="">select country</option>';

        for (let country_code in country_array) {
            // set selected option user country
            let selected = (country_code == user_country_code) ? ' selected' : '';
            option += '<option value="' + country_code + '"' + selected + '>' + country_array[country_code] + '</option>';
        }
        id_country_option.innerHTML = option;
    };

    const createStatesNamesDropdown = () => {
        let selected_country_code = id_country_option.value;
        // get state names
        let state_names = states_array[selected_country_code];

        // if invalid country code
        if (!state_names) {
            id_state_option.innerHTML = '<option>select state</option>';
            return;
        }
        let option = '';
        option += '<select id="state">';
        option += '<option>select state</option>';
        for (let i = 0; i < state_names.length; i++) {
            option += '<option value="' + state_names[i].code + '">' + state_names[i].name + '</option>';
        }
        option += '</select>';
        id_state_option.innerHTML = option;
    };

    // country select change event
    id_country_option.addEventListener('change', createStatesNamesDropdown);

    createCountryNamesDropdown();
    createStatesNamesDropdown();
})();
