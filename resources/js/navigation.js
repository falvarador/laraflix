document.addEventListener('click', (event) => {
    const link = event.target.closest('a');
    if (link && link.origin === location.origin) {
        event.preventDefault();
        navigate(link.href);
    }
});

function navigate(url) {
    fetch(url)
        .then(response => response.text())
        .then(html => updateContent(html, url));
}

function updateContent(html, url) {
    if (document.startViewTransition) {
        document.startViewTransition(() => {
            document.querySelector('#content').innerHTML = html;
        });
    } else {
        document.querySelector('#content').innerHTML = html;
    }

    history.pushState(null, '', url);
}
