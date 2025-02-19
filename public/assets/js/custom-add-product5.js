// Add blog editor JS

(function () {
  // standard editor
  var editor8 = new Quill("#editor8", {
    modules: { toolbar: "#toolbar8" },
    theme: "snow",
    placeholder: "Enter your messages...",
  });

  var quillEditor = document.getElementById('quill-editor-area');
  editor8.on('text-change', function() {
    quillEditor.value = editor8.root.innerHTML;
  });

  quillEditor.addEventListener('input', function() {
    editor8.root.innerHTML = quillEditor.value;
  });

})();