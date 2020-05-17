//--------------------
// Get related items
//--------------------
export async function fetchRelatedAfisha(){
    const response = await fetch('/api/get-afisha-related');
    const json = await response.json();
    return json;
}

//----------------------------
//  Get items for page
//---------------------------
export async function fetchRelatedAfishaPage(page =1){
    const response = await fetch(`/api/get-afisha-related-page/${page}`);
    const json = await response.json();
    return json;
}
//--------------------
// Get item for detail
//---------------------
export async function fetchDetailAfisha(id){
    const response = await fetch(`/api/get-afisha-detail/${id}`);
    const json = await response.json();
    return  json;




}
