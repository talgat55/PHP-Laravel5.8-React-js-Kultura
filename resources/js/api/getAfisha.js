export async function fetchRelatedAfisha(){
    const response = await fetch('/api/get-afisha-related');
    const json = await response.json();
    return json;
}


export async function fetchRelatedAfishaPage(page =1){
    const response = await fetch(`/api/get-afisha-related-page/${page}`);
    const json = await response.json();
    return json;
}
