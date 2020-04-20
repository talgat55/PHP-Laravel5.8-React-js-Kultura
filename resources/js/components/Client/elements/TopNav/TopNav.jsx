import React, {useState} from 'react';
import {connect} from 'react-redux';
import styled from 'styled-components';
import ReactHtmlParser from 'react-html-parser';
import FadeIn from "react-fade-in";
import PropTypes from "prop-types";
import Slide from "../HomeSlider/Slide";

const TopNav = (props) => {

    const [showAboutContent, setShowAboutContent] = useState(false);
    const [showContactContent, setShowContactContent] = useState(false);
    const contentAbout = props.data.about_info;

    const clickHandler = (e, kind) => {
        console.log(kind);
        if (kind === "1") {
            setShowContactContent(!showContactContent);
        } else if (kind === "2") {
            setShowAboutContent(!showAboutContent);
            console.log(showAboutContent);
        }
    };
    const clickCloseHandler = () => {
        setShowAboutContent(false);
        setShowContactContent(false);
    };
    return (
        <TopNavComponent className="top-nav">
            <ul>
                <li key="1">
                    <a href="#" onClick={(e) => clickHandler(e, '1')}>
                        Контакты
                    </a>
                </li>
                <li key="2">
                    <a href="#" onClick={(e) => clickHandler(e, '2')}>
                        О нас
                    </a>
                </li>
            </ul>
            {
                showContactContent && (
                    <FadeIn>
                        <div className="top-nav__content top-nav__content_contact">
                            <a href="#" className="top-nav__close" onClick={clickCloseHandler}>
                                <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAJ1BMVEUAAAASpp0Sp54Vqp8Spp0WppsSpp0XoqISpp4Spp0Mqp4Spp0AAACkeZqtAAAAC3RSTlMAuMcY1hfVFtTTFdAuOsAAAAABYktHRACIBR1IAAAACXBIWXMAAA3XAAAN1wFCKJt4AAAAB3RJTUUH4gYMAwQcIOV9IwAAAFNJREFUCNdjEDJgAAJmRQZtVxAjZBODyZYABgZWb2cgTmdgKAPxwnYUsHenAqXZu2et3FEAUli5c/Z0EM3ANXvnAlQGTAquGKYdbiDcCrilMGcAAMhoH1nVL9LXAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE4LTA2LTEyVDAzOjA0OjI4KzAyOjAwMQLR2QAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOC0wNi0xMlQwMzowNDoyOCswMjowMEBfaWUAAAAZdEVYdFNvZnR3YXJlAHd3dy5pbmtzY2FwZS5vcmeb7jwaAAAAAElFTkSuQmCC"
                                    className="loading"/>
                            </a>
                            <div className="c-content" itemProp="address" itemScope=""
                                 itemType="http://schema.org/PostalAddress">
                                <div className="separator">
                                    <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAqFBMVEUAAAAA//8Rpp4Spp0Spp0Spp0Tpp0RpJ4AqqoRpp0TpZ4AmZkSp50TpZ0OqpwSpp0Spp0Tp5wSppwSpp0Spp0XoqIRpZ0Sp54RpZ8SpZ0SpZ0VqpURqpkSpp0Tpp4Tpp0Rpp4Spp0Spp0Spp0Spp0Tpp0Spp0TppwSp50SpKQSpp0as5kTpZ4Rpp4Sp54TqJsSpp0Spp0WppsTpp0Spp0Up50Spp0AAADwO7XlAAAANnRSTlMAAVzB7NmVTAa+pQWZehL85HyB6PYWW1RKY4AMD/17bXY56/u3zuCJfw7nCk+/qin68ReHc04gR+9iAAAAAWJLR0QAiAUdSAAAAAlwSFlzAAAN1wAADdcBQiibeAAAAAd0SU1FB+IGDAIdKwKaGwMAAACNSURBVBjTVY5XFoJAEAQbFRMGTIBZUdeAOfT9j+a4QbF/Zqr2ve0BJF6hWPLLFbhUa9SpB1Y0aNM03GqTYafbI/sDLSJ5i4FExlCLkWxjYDIlZ1rEIubAQsbSlKTkar0RVp75detadrZ2fzCsMndZZMTxeypOHz7/GJcrebvnBB7kM8/IlB/8CbwSu7wB5BkUxSLfA0EAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTgtMDYtMTJUMDI6Mjk6NDMrMDI6MDCFbmdQAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE4LTA2LTEyVDAyOjI5OjQzKzAyOjAw9DPf7AAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAAASUVORK5CYII="
                                        className="loading" data-was-processed="true"/>
                                </div>
                                <div className="text" itemProp="streetAddress">г. Омск, ул. Гагарина, 22</div>
                                <div className="separator">
                                    <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAkFBMVEUAAAASp50Spp0UnZ0Tpp0Sp50SpZ0Spp0NppkSpp0Spp0Spp0Rpp4Sp54Spp0Tpp8Up50Spp0AqqoTpZsUpZ0Spp0SpJ4RpZ0Spp0SpZ0TpZ4Spp0Spp0RppsVqpUSpp0Spp0Rpp0Rqpkas5kSpp0Spp0A//8Rp58SpZ4TppwTpZ4Spp0SpZ0Spp4Spp0AAAATMTJYAAAALnRSTlMAgtkNh3998hT0jOy/rekoTskDUkHvKpTitk/TvS4MwfySDwqr0gE9i1Cl5vV+ckCBrQAAAAFiS0dEAIgFHUgAAAAJcEhZcwAADdcAAA3XAUIom3gAAAAHdElNRQfiBgwCISmfZwPQAAAAeklEQVQY003NWRKCQAwE0IAoigiyuOECiKKg9v2PRwZqys5fXnU6IuK4M+HxgDnvCwD+kmClgIBgbSAk2OgexQRbhYRLU1clY8kVdnuWg8qRJT2ZTCHx+XKd5JaY12UEVPV9lOYBO88p0zoWPFv0Gs/w/le3Xf/5/kQGPhYPTxZUtNkAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTgtMDYtMTJUMDI6MzM6NDErMDI6MDDEXTlwAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE4LTA2LTEyVDAyOjMzOjQxKzAyOjAwtQCBzAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAAASUVORK5CYII="
                                        className="loading" data-was-processed="true"/>
                                </div>
                                <div className="text"> Пресс-служба:
                                    <a href="tel:89069198264" itemProp="telephone">
                                        8(906)919-82-64
                                    </a> – Светлана Саликова<br/>
                                    Редактор сайта:
                                    <a href="tel:89620334319" itemProp="telephone">
                                        8 (962)033-43-19
                                    </a> – Ирина Чернышева
                                    Сайт Министерства культуры: <strong>
                                        <a href="http://www.sibmincult.ru/index3.php">www.sibmincult.ru</a></strong>
                                </div>
                                <div className="separator">
                                    <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAbFBMVEUAAAARpp0SpZ0Spp0RppwSpp0Spp0RpZ4TpZwSpZ4RpJoSpp0Sp54Op54Spp0Spp0RpJkSpp0Spp0UppoSpJgSpp0Qo58Spp0Spp0TqJoSpZwQp50Spp0Spp0Sp50RpJwQp5wSpZwSpp0AAABdCFuGAAAAInRSTlMAPLa4TY/8aWyLTPOqN+XFLdDgPyrIQOLnNahO8vSCal2OzqhckwAAAAFiS0dEAIgFHUgAAAAJcEhZcwAADdcAAA3XAUIom3gAAAAHdElNRQfiBgwCIwoPNhAgAAAAc0lEQVQY04WOSxJAMBQEnyD+QoT4k7n/IVGplFRZ6F33Zobol4CFHiygKIZHHBFPUu6UpwknIMsL60WeAXdAWdWP11UJGyCaFmgbARdkpxhTnXShH/Q4TaMeehvmZQW2DViX+Qn78c4eO+g0/jFzfq//cgHZYxFD1pTpyQAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxOC0wNi0xMlQwMjozNToxMCswMjowMCfUTOcAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTgtMDYtMTJUMDI6MzU6MTArMDI6MDBWifRbAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                        className="loading" data-was-processed="true"/>
                                </div>
                                <div className="text">
                                    <a href="mailto:kultura.omsk@yandex.ru"
                                       itemProp="email">kultura.omsk@yandex.ru
                                    </a>
                                </div>
                            </div>
                        </div>
                    </FadeIn>
                )
            }

            {
                showAboutContent && (
                    <FadeIn>
                        <div className="top-nav__content top-nav__content_about">
                            <a href="#" className="top-nav__close" onClick={clickCloseHandler}>
                                <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAJ1BMVEUAAAASpp0Sp54Vqp8Spp0WppsSpp0XoqISpp4Spp0Mqp4Spp0AAACkeZqtAAAAC3RSTlMAuMcY1hfVFtTTFdAuOsAAAAABYktHRACIBR1IAAAACXBIWXMAAA3XAAAN1wFCKJt4AAAAB3RJTUUH4gYMAwQcIOV9IwAAAFNJREFUCNdjEDJgAAJmRQZtVxAjZBODyZYABgZWb2cgTmdgKAPxwnYUsHenAqXZu2et3FEAUli5c/Z0EM3ANXvnAlQGTAquGKYdbiDcCrilMGcAAMhoH1nVL9LXAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE4LTA2LTEyVDAzOjA0OjI4KzAyOjAwMQLR2QAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOC0wNi0xMlQwMzowNDoyOCswMjowMEBfaWUAAAAZdEVYdFNvZnR3YXJlAHd3dy5pbmtzY2FwZS5vcmeb7jwaAAAAAElFTkSuQmCC"
                                    className="loading"/>
                            </a>
                            {ReactHtmlParser(contentAbout)}
                        </div>
                    </FadeIn>
                )
            }

        </TopNavComponent>
    )
};

const TopNavComponent = styled.div`
  
    margin: 15px 0 0 auto;
    position: relative;
   .top-nav__close{
       position: absolute;
        right: 13px;
        top: 12px;
   }
   .top-nav__content{ 
        font-family: "Neo Sans Pro";
        font-size: 16px;
        color: #000; 
        text-decoration: none;
        text-align: center;
        position: absolute;
        right: 0;
        background: #fff;
        top: 55px; 
        z-index: 99999999999;
        padding: 25px 34px 20px 34px;
        border: 2.5px solid #12a69d;
        &::before {
            content: " ";
            width: 28px;
            height: 28px;
            background: #fff;
            border-top: 2.5px solid #12a69d;
            position: absolute;
            border-left: 2.5px solid #12a69d;
            top: -17px;
            right: 41px;
            transform: rotateZ(45deg);
        }
   }
   .top-nav__content_about{
      width: 900px;
   }
   .top-nav__content_contact{
       width: 500px;
   }
   .top-nav__content_contact a, 
   .top-nav__content_contact .text {
        font-family: "Neo Sans Pro";
        font-size: 16px;
        color: #000;
        padding: 0 0 8px;
        text-decoration: none;
        text-align: center;
   }
  ul{
    margin: 0;
    padding: 0;
    display: flex;
    li{
      list-style: none;
      padding-left: 10px;
      a{
        display: inline-block;
        text-transform: uppercase;
        text-decoration: none;
        font-family: 'Open Sans', sans-serif;
        font-weight: 700;
        font-size: 18px;
        line-height: 20px;
        color: #fff;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        transition: all 0.3s ease;
        &:hover{
          text-decoration: underline;
        }
      }
    }
    li:first-child{
      padding-left: 0;
    }
  }

`;

const mapStateToProps = state => {
    return {
        data: state.settings.data
    }
};
TopNav.propTypes = {
    props: PropTypes.shape({
        data: PropTypes.string,
    }),
};
export default connect(mapStateToProps, null)(TopNav);