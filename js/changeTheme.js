'use strict';

class DarkThemeBtn extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      isToggleOn: true
    };
    this.handleClick = this.handleClick.bind(this);
  }

  handleClick() {
    this.setState(prevState => ({
      isToggleOn: !prevState.isToggleOn
    }));
  }

  render() {
    let link = document.getElementById("theme-link");

    if (this.state.isToggleOn) {
      link.setAttribute("href", "css/light.css");
    } else {
      link.setAttribute("href", "css/dark.css");
    }

    return /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("input", {
      className: "toggle",
      type: "checkbox",
      onClick: this.handleClick
    }));
  }

}

ReactDOM.render( /*#__PURE__*/React.createElement(DarkThemeBtn, null), document.getElementById('change__theme-btn'));