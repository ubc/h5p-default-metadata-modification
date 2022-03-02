(function($){
    
    if( ! H5PIntegration || ! H5PIntegration.editor || ! H5PIntegration.editor.metadataSemantics ) {
        return;
    }

    // Set default license to 'Attributon(CC BY)'
    if( H5PIntegration.editor.metadataSemantics[1] ) {
        H5PIntegration.editor.metadataSemantics[1].default = 'CC BY';
    }

    // Set default license version to '4.0 International'
    if( H5PIntegration.editor.metadataSemantics[2] ) {
        H5PIntegration.editor.metadataSemantics[2].default = '4.0';
    }

})(jQuery); 