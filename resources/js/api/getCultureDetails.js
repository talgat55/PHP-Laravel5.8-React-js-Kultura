export async function fetchRelatedCultureDetails(){
    const response = await fetch('/api/get-culture-details-last');
    const json = await response.json();
    return json;
}

//---------------
//  Get data for page
//--------------
export async function fetchCultureDetailsPage(page = 1){
    const response = await fetch(`/api/culture-details-page/${page}`);
    const json = await response.json();
    return json;
}
//-------------------
// Get data for detail page
//---------------------------
export async function fetchCultureDetailsPageBySlug(slug){
    const response = await fetch(`/api/culture-details-detail/${slug}`);
    const json = await response.json();
    return json;
}


