import React, {useEffect, useState} from 'react';
import Header from "../elements/Header/Header";
import Footer from "../elements/Footer/Footer";
import {fetchHomeSliders} from "../../../api/getHomeSliders";
import {fetchRelatedAfisha} from "../../../api/getAfisha";
import {fetchBanner} from "../../../api/getBanner";
import HomeSlider from "../elements/HomeSlider/HomeSlider";
import AfishaBlock from "../elements/AfishaBlock/AfishaBlock";
import Banner from "../elements/Banner/Banner";

const Home = () => {
    const [homeSliders, setHomeSliders] = useState([]);
    const [afishaSlides, setAfishaSlides] = useState([]);
    const [banner, setBanner] = useState(null);
    useEffect(() => {
        const fetchData = async () => {
            // get from api   home slider slides
            const dataHomeSlides = await fetchHomeSliders();
            setHomeSliders(dataHomeSlides);
            // get from api related afisha slides
            const dataAfisahSlides = await fetchRelatedAfisha();
            setAfishaSlides(dataAfisahSlides);

            const dataBanner = await fetchBanner('home_one');
            setBanner(dataBanner[0]);



        };
        fetchData();

        return () => {
            setHomeSliders([]);
            setAfishaSlides([]);
            setBanner('');
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
            {
                banner &&(
                    <Banner
                        link={banner.link}
                        url={banner.image}
                    />
                )
            }


            <Footer/>
        </>
    )
};

export default Home;