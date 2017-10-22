package edu.uw.iguest.lighthouse;

import android.content.Intent;
import android.provider.MediaStore;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class Optional extends AppCompatActivity {
    static final int REQUEST_IMAGE_CAPTURE = 1;
    
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_optional);
    }

    public void country(View view) {
        Intent intent = new Intent(Optional.this, Country.class);
        startActivity(intent);
    }
}
