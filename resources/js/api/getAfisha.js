export async function fetchRelatedAfisha(){
    const response = await fetch('/api/get-afisha-related');
    const json = await response.json();
    return json;
}