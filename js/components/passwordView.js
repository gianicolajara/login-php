const d = document;

const passwordView = (button, input) => {
  const $button = d.querySelector(button),
    $input = d.querySelector(input);
  d.addEventListener("click", (e) => {
    if (e.target === $button) {
      $input.type === "password"
        ? ($input.type = "text")
        : ($input.type = "password");
    }
  });
};

export default passwordView;
