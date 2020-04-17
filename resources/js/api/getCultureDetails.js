export async function fetchRelatedCultureDetails(){
    const response = await fetch('/api/get-culture-details-last');
    const json = await response.json();
    return json;
}