export async function fetchGalleryPage(page =1){
    const response = await fetch(`/api/get-gallery-page/${page}`);
    const json = await response.json();
    return json;
}
