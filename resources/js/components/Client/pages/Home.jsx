import React, {useEffect, useState} from 'react';
import Header from "../elements/Header/Header";
import Footer from "../elements/Footer/Footer";
import {fetchHomeSliders} from "../../../api/getHomeSliders";
import {fetchRelatedAfisha} from "../../../api/getAfisha";
import HomeSlider from "../elements/HomeSlider/HomeSlider";
import AfishaBlock from "../elements/AfishaBlock/AfishaBlock";

const Home = () => {
    const [homeSliders, setHomeSliders] = useState([]);
    const [afishaSlides, setAfishaSlides] = useState([]);
    useEffect(() => {
        const fetchData = async () => {
            // get from api   home slider slides
            const dataHomeSlides = await fetchHomeSliders();
            setHomeSliders(dataHomeSlides);
            // get from api related afisha slides
            const dataAfisahSlides = await fetchRelatedAfisha();
            setAfishaSlides(dataAfisahSlides);



        };
        fetchData();

        return () => {
            setHomeSliders([]);
            setAfishaSlides([]);
        }

    }, [setHomeSliders]);

    return (
        <>
            <Header/>
            <HomeSlider
                sliders={homeSliders}
            />
            <AfishaBlock
                sliders={afishaSlides}
            />

            <Footer/>
        </>
    )
};

export default Home;