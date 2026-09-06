const perPage = document.querySelector('#per-page');
const listingContent = document.querySelector('.listing-content');


if (perPage && listingContent) {

    perPage.addEventListener('change', async function () {

        const params = new URLSearchParams(window.location.search);

        params.set('per_page', this.value);
        params.delete('page');

        const response = await fetch(
            `/admin/products?${params.toString()}`,
            {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                },
            }
        );

        const listing = await response.text();

        listingContent.innerHTML = listing;

        window.history.replaceState(
            {},
            '',
            `${window.location.pathname}?${params.toString()}`
        );

    });

}
