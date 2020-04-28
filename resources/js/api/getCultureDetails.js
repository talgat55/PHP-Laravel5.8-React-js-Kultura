export async function fetchRelatedCultureDetails(){
    const response = await fetch('/api/get-culture-details-last');
    const json = await response.json();
    return json;
}


export async function fetchCultureDetailsPage(page = 1){
    const response = await fetch(`/api/get-afisha-related-page/${page}`);
    const json = await response.json();
    return json;
}


