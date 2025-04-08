<?php
// Aggiunge una voce di menu nel pannello admin
function custom_theme_settings_menu() {
    add_menu_page(
        'Modifica contatti',     // Titolo della pagina
        'Modifica contatti',     // Nome del menu
        'manage_options',        // Capability richiesta
        'custom-theme-settings', // Slug
        'custom_theme_settings_page', // Funzione callback
        'dashicons-admin-generic',    // Icona
        20                             // Posizione
    );
}
add_action('admin_menu', 'custom_theme_settings_menu');

// Pagina delle impostazioni
function custom_theme_settings_page() {
    ?>
    <div class="wrap">
        <h1>Contatti</h1>
        <form method="post" action="options.php">
            <?php
                settings_fields('custom_theme_settings_group');
                do_settings_sections('custom-theme-settings');
                submit_button('Salva Contatti');
            ?>
        </form>
    </div>
    <?php
}

// Registra le impostazioni
function custom_theme_settings_init() {
    register_setting('custom_theme_settings_group', 'custom_phone_1');
    register_setting('custom_theme_settings_group', 'custom_phone_2');
    register_setting('custom_theme_settings_group', 'custom_email_1');
    register_setting('custom_theme_settings_group', 'custom_email_2');
    register_setting('custom_theme_settings_group', 'custom_via');
    register_setting('custom_theme_settings_group', 'custom_dati_indirizo');
    register_setting('custom_theme_settings_group', 'custom_regione');
    register_setting('custom_theme_settings_group', 'custom_orario');
    register_setting('custom_theme_settings_group', 'custom_orario_infoextra');
    register_setting('custom_theme_settings_group', 'custom_intestazione');

    add_settings_section(
        'custom_theme_contatti_section',
        'Intestazione',
        null,
        'custom-theme-settings'
    );

        add_settings_field(
            'custom_intestazione',
            'Intestazione contatti',
            'custom_intestazione_render',
            'custom-theme-settings',
            'custom_theme_contatti_section'
        );

        add_settings_section(
            'custom_theme_telefoni_section',
            'Numeri di telefono',
            null,
            'custom-theme-settings'
        );

            add_settings_field(
                'custom_phone_1',
                'Telefono 1',
                'custom_phone_1_render',
                'custom-theme-settings',
                'custom_theme_telefoni_section'
            );

            add_settings_field(
                'custom_phone_2',
                'Telefono 2',
                'custom_phone_2_render',
                'custom-theme-settings',
                'custom_theme_telefoni_section'
            );

        add_settings_section(
            'custom_theme_email_section',
            'Indirizi email',
            null,
            'custom-theme-settings'
        );

            add_settings_field(
                'custom_email_1',
                'Email 1',
                'custom_email_1_render',
                'custom-theme-settings',
                'custom_theme_email_section'
            );

            add_settings_field(
                'custom_email_2',
                'Email 2',
                'custom_email_2_render',
                'custom-theme-settings',
                'custom_theme_email_section'
            );

        add_settings_section(
            'custom_theme_address_section',
            'Indirizo fisico',
            null,
            'custom-theme-settings'
        );

            add_settings_field(
                'custom_via',
                'Via',
                'custom_via_render',
                'custom-theme-settings',
                'custom_theme_address_section'
            );

            add_settings_field(
                'custom_dati_indirizo',
                'CAP Luogo(Provincia)',
                'custom_dati_indirizo_render',
                'custom-theme-settings',
                'custom_theme_address_section'
            );

            add_settings_field(
                'custom_regione',
                'regione, nazione',
                'custom_regione_render',
                'custom-theme-settings',
                'custom_theme_address_section'
            );

        add_settings_section(
            'custom_theme_orario_section',
            'Orario di accoglienza',
            null,
            'custom-theme-settings'
        );

            add_settings_field(
                'custom_orario',
                'Orario di accoglienza',
                'custom_orario_render',
                'custom-theme-settings',
                'custom_theme_orario_section'
            );

            add_settings_field(
                'custom_orario_infoextra',
                'Altre informazioni',
                'custom_orario_infoextra_render',
                'custom-theme-settings',
                'custom_theme_orario_section'
            );

    
}
add_action('admin_init', 'custom_theme_settings_init');

// Custom render functions for each field
function custom_phone_1_render() {
    $value = get_option('custom_phone_1', '');
    echo '<input type="text" name="custom_phone_1" value="' . esc_attr($value) . '" class="regular-text">';
}

function custom_phone_2_render() {
    $value = get_option('custom_phone_2', '');
    echo '<input type="text" name="custom_phone_2" value="' . esc_attr($value) . '" class="regular-text">';
}

function custom_email_1_render() {
    $value = get_option('custom_email_1', '');
    echo '<input type="email" name="custom_email_1" value="' . esc_attr($value) . '" class="regular-text">';
}

function custom_email_2_render() {
    $value = get_option('custom_email_2', '');
    echo '<input type="email" name="custom_email_2" value="' . esc_attr($value) . '" class="regular-text">';
}

function custom_via_render() {
    $value = get_option('custom_via', '');
    echo '<input type="text" name="custom_via" value="' . esc_attr($value) . '" class="regular-text">';
}

function custom_dati_indirizo_render() {
    $value = get_option('custom_dati_indirizo', '');
    echo '<input type="text" name="custom_dati_indirizo" value="' . esc_attr($value) . '" class="regular-text">';
}

function custom_regione_render() {
    $value = get_option('custom_regione', '');
    echo '<input type="text" name="custom_regione" value="' . esc_attr($value) . '" class="regular-text">';
}

function custom_orario_render() {
    $value = get_option('custom_orario', '');
    echo '<input type="text" name="custom_orario" value="' . esc_attr($value) . '" class="regular-text">';
}

function custom_orario_infoextra_render() {
    $value = get_option('custom_orario_infoextra', '');
    echo '<input type="text" name="custom_orario_infoextra" value="' . esc_attr($value) . '" class="regular-text">';
}

function custom_intestazione_render() {
    $value = get_option('custom_intestazione', '');
    echo '<textarea name="custom_intestazione" class="large-text" rows="4">' . esc_textarea($value) . '</textarea>';
}