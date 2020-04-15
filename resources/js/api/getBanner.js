export async function fetchBanner(page = ''){
    const response = await fetch(`/api/get-banner/${page}`);
    const object =  await   response.json();
    return    object;
}

