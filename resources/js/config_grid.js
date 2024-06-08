new DataTable('#grid', {
    ajax: 'scripts/server_processing.php',
    processing: true,
    serverSide: true,
    order: true,
    pagination: 30,
    language: ptr-BR,
});